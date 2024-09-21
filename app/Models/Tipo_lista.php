<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_lista extends Model
{
    use HasFactory;

    protected $table = "tipo_listas";
    protected $primaryKey = "id_tipo_lista";

    protected $fillable = [
        'nome_tipo_lista'
    ];

    public function Lista(){
        return $this->hasMany(Lista::class, "lista_id_tipo", "id_lista");
        //tipo pode ter várias listas
    }
}
