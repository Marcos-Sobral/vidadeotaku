<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use App\Models\Lista;
use App\Models\Status_lista;
use App\Models\Tipo_lista;
use App\Models\User;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listas = Lista::all();
        return view('pages.listas.index', compact('listas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $tipo_listas = Tipo_lista::all();
        $status_listas = Status_lista::all();
        return view('pages.listas.create', compact('users','status_listas','tipo_listas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome_lista' => 'required|string|max:255',
            'descricao_lista' => 'nullable|string|max:255',
            'is_public' => 'nullable|boolean',
            'img_lista' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status_listas.*' => 'exists:status, id_status_lista',
            'tipo_listas.*' => 'exists:status, id_tipo_lista',
        ]);

        // Processamento da imagem
        if ($request->hasFile('img_lista')) {
            // Gerar um nome único para a imagem
            $imageName = time() . '.' . $request->file('img_lista')->extension();
            // Salvar a imagem na pasta 'public/images/carrossel_photo' sem precisar do storage link
            $request->file('img_lista')->move(public_path('images/lista_photo'), $imageName);
            $validated['img_lista'] = 'lista_photo/' . $imageName;
        }

        $listas = Lista::create($validated);

        // Associar as status_listas ao listas
        if ($request->has('status_listas')) {
            $listas->status_listas()->sync($request->status_listas);
        }
        // Associar as status_listas ao listas
        if ($request->has('tipo_listas')) {
            $listas->tipo_listas()->sync($request->tipo_listas);
        }
    
                
        return redirect()->route('admin.lista.index')->with('success', 'A lista foi criada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pages.listas.create', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::all();
        $tipo_listas = Tipo_lista::all();
        $status_listas = Status_lista::all();
        $listas = Lista::findOrFail($id); // Busca apenas a lista específica
        return view('pages.listas.create', compact('users','status_listas','tipo_listas','listas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome_lista' => 'required|string|max:255',
            'descricao_lista' => 'nullable|string|max:255',
            'is_public' => 'nullable|boolean',
            'img_lista' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status_listas.*' => 'exists:status_lista,id_status_lista',
            'tipo_listas.*' => 'exists:tipo_lista,id_tipo_lista',
        ]);
    
        $lista = Lista::findOrFail($id);
    
        // Processamento da imagem
        if ($request->hasFile('img_lista')) {
            $imageName = time() . '.' . $request->file('img_lista')->extension();
            $request->file('img_lista')->move(public_path('images/lista_photo'), $imageName);
            $validated['img_lista'] = 'lista_photo/' . $imageName;
        }
    
        $lista->update($validated);
    
        // Atualizar associações
        if ($request->has('status_listas')) {
            $lista->status_listas()->sync($request->status_listas);
        }
    
        if ($request->has('tipo_listas')) {
            $lista->tipo_listas()->sync($request->tipo_listas);
        }
    
        return redirect()->route('admin.lista.index')->with('success', 'A lista foi atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lista = Lista::findOrFail($id);
        $lista->delete();

        return redirect()->route('admin.lista.index')->with('success', 'A lista foi criada com sucesso.');
    }
}
