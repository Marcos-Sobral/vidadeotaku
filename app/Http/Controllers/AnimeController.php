<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Anime;
class AnimeController extends Controller

{
    public function about(){
        $animes = Anime::all();
        return view('index', compact('animes'));
    }

    public function index(){
        $animes = Anime::all();
        return view('animes.index', compact('animes'));
    }

    public function create(){
        $animes = Anime::all();
        return view('animes.create', compact('animes'));
    }

    public function store(Request $request){
        // Opção 1
        $anime = new Anime;
        $anime->Name = $request->Name;
        $anime->Link = $request->Link;
        $anime->Status = $request->Status;
        $anime->Genre = $request->Genre;
        $anime->Sinopsis = $request->Sinopsis;
        $anime->img_anime_id = $request->img_anime_id;
        $anime->ep_anime_id = $request->ep_anime_id;
        $anime->lista_anime_id = $request->lista_anime_id;
        //dd($anime);
        $anime->save();
        
        /*Opção 2
        $request->validate([
            'Name' => ['required'],
        ]);
        
        /* Criando Produto */
       
       /* Anime::create([
            'Name' => $request->Name,
            'Link' => $request->Link,
            'Status' => $request->Status,
            'Genre' => $request->Genre,
            'Sinopsis' => $request->Sinopsis,
            'img_anime_id	' => $request->ImgAnime,
            'ep_anime_id' => $request->ep_anime_id,
            'lista_anime_id' => $request->lista_anime_id,
        ]);*/
        $animes = Anime::all();
        return view('animes.index', compact('animes'));
    }

    public function edit($id){
        $animes = Anime::find($id);
        return view('animes.edit', compact('animes'));
    }

    public function update(Request $request, $id){
        //Opção 1
        /*$anime->Name = $request->Name;
        $anime->Link = $request->Link;
        $anime->Status = $request->Status;
        $anime->Genre = $request->Genre;
        $anime->Sinopsis = $request->Sinopsis;
        $anime->img_anime_id = $request->img_anime_id;
        $anime->ep_anime_id = $request->ep_anime_id;
        $anime->lista_anime_id = $request->lista_anime_id;
        $anime->save();*/

        // Opção 2 
        $animes = Anime::find($id);
        $animes->update($request->all());
        
        $animes = Anime::all();;
        return view('animes.index', compact('animes'));
    }

    public function destroy($id){
        $animes = Anime::find($id);
        $animes->delete();
        return redirect()->route('animes.index');
    }
}
