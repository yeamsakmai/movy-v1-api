<?php

namespace App\Http\Controllers;

use App\Models\Upcoming; 
use Illuminate\Http\Request;

class UpcomingController extends Controller
{
    public function getUpcoming(){
        $upcomings = Upcoming::all(); 

        if ($upcomings->isEmpty()) {
            return response()->json(['message' => 'No Upcoming movie found'], 404);
        }

        return response()->json(['upcomings' => $upcomings]);
    }
}
