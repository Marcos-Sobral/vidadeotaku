<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_lista extends Model
{
    use HasFactory;

    protected $table = "status_listas";
    protected $primaryKey = "id_status_lista";

    protected $fillable = [
        'tipo_status_lista',
        'icon_status_lista'
    ];

    public function Lista(){
        return $this->hasMany(Lista::class, "lista_id_status", "id_status_lista");
        //status pode ter várias listas
    }
}
