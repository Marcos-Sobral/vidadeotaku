<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgEPAnime extends Model
{
    use HasFactory;
    protected $table = 'ImgEPAnime';

    protected $fillable = [
        'id',
        'Img',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function EpAnime()
    {
        return $this->belongsTo(EpAnime::class, 'ep_animes');
    }
}
