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
        
        return view('animes.index', compact('animes'));
    }

    public function show(){
        
        return view('animes.index', compact('animes'));
    }

    public function edit($id){

        return view('animes.edit', compact('animes'));
    }

    public function update(Request $request, $id){

        return view('animes.index', compact('animes'));
    }

    public function destroy($id){
        $animes = Anime::find($id);
        $animes = delete();
        return view('animes.index', compact('animes'));
    }
}
