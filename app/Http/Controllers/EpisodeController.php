<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;

class EpisodeController extends Controller
{
    public function incrementViewCount($id)
    {
        $episode = Episode::findOrFail($id);
        $episode->increment('view'); // Increment the view count
        return response()->json(['message' => 'View count updated successfully', 'view_count' => $episode->view]);
    }
}
