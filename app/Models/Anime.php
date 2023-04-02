<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable = [
        'id',
        'Name',
        'Link',
        'Status',
        'Genre',
        'Sinopsis',
        'ImgAnime',
        'ImgAnime_id',
        'EPAnime_id',
        'ListaAnime_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // Relacionamento entre tabelas
    public function ImgAnime()
    {
        return $this->hasOne(ImgAnime::class, 'ImgAnime_id');
    }

    public function EpAnime()
    {
        return $this->hasMany(EpAnime::class, 'EPAnime_id');
    }

    public function ListaAnime()
    {
        return $this->hasMany(ListaAnime::class, 'ListaAnime_id');
    }

}
