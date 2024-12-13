<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Fetch the authenticated user's selected subjects
    public function selectedSubjects()
    {
        $user = auth()->user(); // Get the authenticated user
        
        // Fetch selected subjects for this user with related course data
        $selectedSubjects = $user->selectedSubjects()->with('course')->get();

        // Return the selected subjects with course data
        return response()->json($selectedSubjects);
    }

    // You can also define other methods like dashboard if needed
    public function dashboard()
    {
        $user = auth()->user(); // Get the authenticated user
        $selectedSubjects = $user->selectedSubjects()->with('course')->get(); // Fetch selected subjects

        return response()->json([
            'user' => $user,
            'selectedSubjects' => $selectedSubjects,
        ]);
    }
}
