<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_item extends Model
{
    use HasFactory;

    protected $table = "tipo_itens";
    protected $primaryKey = "id_tipo_item";

    protected $fillable = [
        'nome_tipo_item'
    ];

    public function Item(){
        return $this->hasMany(Lista::class, "itens_id_tipo", "id_tipo_item");
        //tipo pode ter várias itens
    }
}
