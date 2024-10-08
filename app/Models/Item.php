<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = "itens";
    protected $primaryKey = "id_item";

    protected $fillable = [
        "nome_item",
        "descricao_item",
        "cronologia_item",
        "img_item",
        "is_public",
        "item_id_autor",
        "item_id_tipo",
        "item_id_status",
        "item_id_user",
    ];

    public function User(){
        return $this->belongsTo(User::class, 'item_id_user','id');
        //O item tem apenas um usuário
    }

    public function Autor_item(){
        return $this->belongsTo(Autor_item::class, 'item_id_autor','id_item');
        //O item tem apenas um autor
    }

    public function Status_item(){
        return $this->belongsTo(Status_item::class, 'item_id_status','id_item');
        //O item tem apenas um status
    }

    public function Tipo_item(){
        return $this->belongsTo(Tipo_item::class, 'item_id_tipo','id_item');
        //O item tem apenas um status
    }

    public function Genero_item(){
        return $this->belongsToMany(Genero_item::class, "item_genero",'id_item','id_genero_item');
         // O item tem vários gêneros através da tabela pivot 'item_genero'
    }

    public function Sub_itens(){
        return $this->hasMany(Sub_itens::class, 'id_sub_item','id_item');
        //O item tem varios sub itens
    }
}
