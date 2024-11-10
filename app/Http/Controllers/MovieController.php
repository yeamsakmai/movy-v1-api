<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function getMovies()
    {
        $movies = Movie::with('episodes')->latest()->paginate(10);
        if ($movies->isEmpty()) {
            return response()->json(['message' => 'No movies found'], 404);
        }
        return response()->json(['movies' => $movies]);
    }
}
