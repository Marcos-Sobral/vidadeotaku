<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = "perfis";
    protected $primaryKey = "id_perfil";
    protected $fillable = [
        'tipo_perfil'
    ];

    public function users(){
        return $this->hasMany(User::class, 'users_id_perfil', 'id_perfil');
        //perfil tem muitos usuários 
    }
}
