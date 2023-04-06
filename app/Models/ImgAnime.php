<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgAnime extends Model
{
    use HasFactory;
    protected $table = 'ImgAnime';

    protected $fillable = [
        'id',
        'Img',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function Anime()
    {
        return $this->belongsTo(Anime::class, 'animes');
    }
}
