<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upcoming extends Model
{
    /** @use HasFactory<\Database\Factories\UpcomingFactory> */
    use HasFactory;
    protected $fillable =[
        'title',
        'image_url',
    ];
}
