<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_itens extends Model
{
    use HasFactory;

    protected $table = "sub_itens";
    protected $primaryKey = "id_sub_item";

    protected $fillable = [
        "titulo_sub_item",
        "arquivo_sub_item",
        "link_sub_item"
    ];

    public function Item(){
        return $this->belongsTo(Item::class, '
        id_sub_item','id_item');
        //O sub item tem um item
    }
}
