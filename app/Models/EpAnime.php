<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpAnime extends Model
{
    protected $fillable = [
        'id',
        'Name', 
        'Link', 
        'Status',
        'Anime_id',
        'ImgEPAnime_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // Relacionamento entre tabelas
    public function Anime()
    {
        return $this->belongsTo(Anime::class,'animes');
    }

    public function ImgEPAnime()
    {
        return $this->hasOne(ImgEPAnime::class, 'img_ep_animes');
    }
}
