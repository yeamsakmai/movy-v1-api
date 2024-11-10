<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /** @use HasFactory<\Database\Factories\MovieFactory> */
    use HasFactory;
    protected $fillable =[
        'title',
        'image_url',
        'status',
        'episode_count'
    ];
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
