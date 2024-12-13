<?php

namespace App\Http\Controllers;

use App\Models\SelectedSubject; // Import the Course model
use Illuminate\Support\Facades\Auth;
 
use Illuminate\Http\Request;
use App\Models\Course; // Import the Course model

class DashboardController extends Controller
{

    public function index()
    {
        // Get the currently authenticated user
        $user = auth()->user();

        // Retrieve the selected subjects for the user, with course data
        $selectedSubjects = SelectedSubject::where('user_id', $user->id)->with('course')->get();

        // Retrieve all courses
        $courses = Course::all();

        // Pass the data to the view
        return view('dashboard.index', compact('user', 'selectedSubjects', 'courses'));
    }

    public function dashboard()
{
    $user = Auth::user();

    // Fetch selected courses
    $selectedSubjects = SelectedSubject::where('user_id', $user->id)
        ->with('course') // Eager load the related course data
        ->get();

    return view('dashboard.index', [
        'user' => $user,
        'selectedSubjects' => $selectedSubjects,
    ]);
}

}
