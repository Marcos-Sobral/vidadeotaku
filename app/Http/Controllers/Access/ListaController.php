<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Lista;
use App\Models\Status_item;
use App\Models\Status_lista;
use App\Models\Tipo_item;
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
        $itens = Item::all();
        return view('pages.itens.index', compact('itens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $tipo_itens = Tipo_item::all();
        $status_itens = Status_item::all();
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
            'lista_id_status' => 'nullable|exists:status_listas,id_status_lista', 
            'lista_id_tipo' => 'nullable|exists:tipo_listas,id_tipo_lista',
            'lista_id_user' => 'required|exists:users,id', // Adiciona a validação do usuário
        ]);

        $validated['is_public'] = $request->has('is_public') ? 1 : 0;
    
        if ($request->hasFile('img_lista')) {
            $imageName = time() . '.' . $request->file('img_lista')->extension();
            $request->file('img_lista')->move(public_path('images/lista_photo'), $imageName);
            $validated['img_lista'] = 'lista_photo/' . $imageName;
        }
    
        Lista::create($validated);
                
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
        $lista = Lista::findOrFail($id); // Busca apenas a lista específica
        return view('pages.listas.edit', compact('users','status_listas','tipo_listas','lista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lista = Lista::findOrFail($id);
        $validated = $request->validate([
            'nome_lista' => 'required|string|max:255',
            'descricao_lista' => 'nullable|string|max:255',
            'is_public' => 'nullable|boolean',
            'img_lista' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lista_id_status' => 'nullable|exists:status_listas,id_status_lista', 
            'lista_id_tipo' => 'nullable|exists:tipo_listas,id_tipo_lista',
            'lista_id_user' => 'nullable|exists:users,id', // Adiciona a validação do usuário
        ]);
    
        $validated['is_public'] = $request->has('is_public') ? 1 : 0;

        // Processamento da imagem
        if ($request->hasFile('img_lista')) {
            // Excluir a imagem antiga se existir
            if ($lista->img_lista && file_exists(public_path('images/' . $lista->img_lista))) {
                unlink(public_path('images/' . $lista->img_lista));
            }
    
            // Armazenar a nova imagem na pasta 'public/images/lista_photo'
            $imageName = time() . '.' . $request->file('img_lista')->extension();
            $request->file('img_lista')->move(public_path('images/lista_photo'), $imageName);
            $validated['img_lista'] = 'lista_photo/' . $imageName;
        }

        // Atualizar lista
        $lista->update($validated);
    
        return redirect()->route('admin.lista.index')->with('success', 'A lista foi atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lista = Lista::findOrFail($id);

        if ($lista->img_lista && file_exists(public_path('images/' . $lista->img_lista))) {
            // Excluir a imagem do sistema de arquivos
            unlink(public_path('images/' . $lista->img_lista));
        }


        $lista->delete();

        return redirect()->route('admin.lista.index')->with('success', 'A lista foi criada com sucesso.');
    }
}
