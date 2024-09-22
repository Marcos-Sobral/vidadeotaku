<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use App\Models\Autor_item;
use App\Models\Genero_item;
use App\Models\Item;
use App\Models\Status_item;
use App\Models\Sub_itens;
use App\Models\Tipo_item;
use App\Models\User;
use Illuminate\Http\Request;

class ItemController extends Controller
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
        $autor_itens = Autor_item::all();
        $sub_itens = Sub_itens::all();
        $genero_itens = Genero_item::all();
        return view('pages.itens.create', compact('users','status_itens','tipo_itens','autor_itens',"sub_itens","genero_itens"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome_item' => 'required|string|max:255',
            'descricao_item' => 'nullable|string|max:255',
            'cronologia_item' => 'nullable|string|max:255',
            'img_item' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_public' => 'nullable|boolean',
            'item_id_status' => 'nullable|exists:status_itens,id_status_item', 
            'item_id_autor' => 'nullable|exists:status_itens,id_status_item', 
            'item_id_tipo' => 'nullable|exists:tipo_itens,id_tipo_item',
            'item_id_user' => 'required|exists:users,id',
        ]);

        $validated['is_public'] = $request->has('is_public') ? 1 : 0;
    
        if ($request->hasFile('img_item')) {
            $imageName = time() . '.' . $request->file('img_item')->extension();
            $request->file('img_item')->move(public_path('images/item_photo'), $imageName);
            $validated['img_item'] = 'item_photo/' . $imageName;
        }
    
        Item::create($validated);
                
        return redirect()->route('admin.item.index')->with('success', 'A lista foi criada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pages.itens.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::all();
        $tipo_itens = Tipo_item::all();
        $status_itens = Status_item::all();
        $autor_itens = Autor_item::all();
        $sub_itens = Sub_itens::all();
        $genero_itens = Genero_item::all();
        $itens = Item::findOrFail($id);

        return view('pages.itens.edit', compact('users','itens','status_itens','tipo_itens','autor_itens',"sub_itens","genero_itens"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $itens = Item::findOrFail($id);
        $validated = $request->validate([
            'nome_item' => 'required|string|max:255',
            'descricao_item' => 'nullable|string|max:255',
            'cronologia_item' => 'nullable|string|max:255',
            'img_item' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_public' => 'nullable|boolean',
            'item_id_status' => 'nullable|exists:status_itens,id_status_item', 
            'item_id_autor' => 'nullable|exists:status_itens,id_status_item', 
            'item_id_tipo' => 'nullable|exists:tipo_itens,id_tipo_item',
            'item_id_user' => 'required|exists:users,id',
        ]);

        $validated['is_public'] = $request->has('is_public') ? 1 : 0;

        // Processamento da imagem
        if ($request->hasFile('img_item')) {
            // Excluir a imagem antiga se existir
            if ($itens->img_item && file_exists(public_path('images/' . $itens->img_item))) {
                unlink(public_path('images/' . $itens->img_item));
            }
    
            // Armazenar a nova imagem na pasta 'public/images/item_photo'
            $imageName = time() . '.' . $request->file('img_item')->extension();
            $request->file('img_item')->move(public_path('images/item_photo'), $imageName);
            $validated['img_item'] = 'item_photo/' . $imageName;
        }

        // Atualizar lista
        $itens->update($validated);
    
        return redirect()->route('admin.item.index')->with('success', 'A lista foi atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $itens = Item::findOrFail($id);

        if ($itens->img_item && file_exists(public_path('images/' . $itens->img_item))) {
            // Excluir a imagem do sistema de arquivos
            unlink(public_path('images/' . $itens->img_item));
        }


        $itens->delete();

        return redirect()->route('admin.item.index')->with('success', 'A lista foi criada com sucesso.');
    }
}
