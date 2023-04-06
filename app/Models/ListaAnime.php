<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaAnime extends Model
{
    use HasFactory;
    protected $table = "ListaAnime";
    
    protected $fillable = [
        'id',
        'Name',
        'User_id',
        'Anime_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function User()
    {
        return $this->hasOne(User::class, 'users');
    }

    public function Anime()
    {
        return $this->hasMany(Anime::class, 'animes');
    }
}
