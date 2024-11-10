<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    /** @use HasFactory<\Database\Factories\EpisodeFactory> */
    use HasFactory;
    protected $fillable =[
        'movie_id',
        'title',
        'image_url',
        'video_url',
        'view',
        'duration'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
