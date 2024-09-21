<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor_item extends Model
{
    use HasFactory;

    protected $table = "autor_itens";
    protected $primaryKey = "id_autor_item";

    protected $fillable = [
        "nome_autor_item"

    ];

    public function Item(){
        return $this->hasMany(Item::class, 'item_id_autor','id_item');
        //O autor tem vários itens
    }
}
