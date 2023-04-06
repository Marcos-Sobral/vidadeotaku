<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    protected $table = 'animes';

    protected $fillable = [
        'id',
        'Name',
        'Link',
        'Status',
        'Genre',
        'Sinopsis',
        'img_anime_id',
        'lista_anime_id',
        'created_at',
        'updated_at',
    ];

    // Relacionamento entre tabelas
    public function ImgAnime()
    {
        return $this->hasOne(ImgAnime::class, 'img_anime_id');
    }

    public function EpAnime()
    {
        return $this->hasMany(EpAnime::class, 'Anime_id');
    }

    public function ListaAnime()
    {
        return $this->hasMany(ListaAnime::class, 'lista_anime_id');
    }

}
