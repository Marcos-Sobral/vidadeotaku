<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    use HasFactory;

    protected $table = "listas";
    protected $primaryKey = "id_lista";

    protected $fillable = [
        "nome_lista",
        "descricao_lista",
        "img_lista",
        "is_public",
        "lista_id_user",
        "lista_id_tipo",
        "lista_id_status"
    ];

    public function User(){
        return $this->belongsTo(User::class, "lista_id_user", "id");
         //A lista tem um user
    }

    public function Status_lista(){
        return $this->belongsTo(Status_lista::class, "lista_id_status", "id_status_lista");
        //A lista tem um status
    }

    public function Tipo_lista(){
        return $this->belongsTo(Tipo_lista::class, "lista_id_tipo", "id_tipo_lista");
         //A lista tem um tipo
    }
}
