<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_item extends Model
{
    use HasFactory;

    protected $table = "status_itens";
    protected $primaryKey = "id_status_item";

    protected $fillable = [
        "tipo_status",
    ];

    public function Item(){
        return $this->hasMany(Item::class, 'item_id_status','id_item');
        //O status tem varios itens
    }
}
