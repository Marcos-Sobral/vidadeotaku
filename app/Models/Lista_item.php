<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista_item extends Model
{
    use HasFactory;

    protected $table = "lista_item";
    protected $primaryKey = "id_lista_item";

    protected function Lista(){
        return $this->belongsTo(Lista::class, "lista_item_id_lista","id_lista");
    }
}
