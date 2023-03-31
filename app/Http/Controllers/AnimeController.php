<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Anime;
class AnimeController extends Controller

{
    public function index(){
        $animes = Anime::all();
        return view('index', compact('animes'));
    }

    public function store(Request $request){

    }

    public function show(){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        $animes = Anime::find($id);
        $animes = delete();
        return view('index');
    }
}
