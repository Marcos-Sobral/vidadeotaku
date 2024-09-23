<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero_item extends Model
{
    use HasFactory;

    protected $table = "genero_itens";
    protected $primaryKey = "id_genero_item";

    protected $fillable = [
        "nome_genero_item",
    ];

    public function Item(){
        return $this->belongsToMany(Item::class, "item_genero",'id_genero_item','id_item');
        //O item tem varios generos
    }
}
