<?php

namespace App\Http\Controllers;

use App\Models\Course;

use App\Models\SelectedSubject; // Assuming this model exists to handle subject selections
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    /**
     * Show the form where users can select their subjects.
     */
        public function addSubjectToSession(Request $request)
    {
        // Retrieve existing session data
        $selectedSubjects = session('selectedSubjects', []);

        // Prevent duplicates
        if (!in_array($request->subject, $selectedSubjects)) {
            $selectedSubjects[] = $request->subject; // Add new subject
            session(['selectedSubjects' => $selectedSubjects]); // Update session
        }

        return redirect()->route('dashboard');
    }
    
     public function showForm()
    {
        return view('subjects.select'); // Create a view for selecting subjects
    }

    /**
     * Store the selected subjects in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subjects' => 'required|array|min:1', // Ensure at least one subject is selected
        ]);

        $user = Auth::user(); // Get the currently authenticated user

        // Loop through the selected subjects and store them
        foreach ($request->subjects as $subject) {
            SelectedSubject::create([
                'user_id' => $user->id,
                'subject' => $subject,
            ]);
        }

        return redirect()->route('dashboard')->with('success', 'Your subjects have been selected!');
    }

    /**
     * Show the selected subjects on the dashboard.
     */
    public function showDashboard()
    {
        $user = Auth::user(); // Get the current user

        // Retrieve the user's selected subjects
        $selectedSubjects = $user->selectedSubjects; 

        return view('dashboard.index', compact('selectedSubjects')); // Pass selected subjects to the dashboard view
    }

    public function index()
{
    $user = auth()->user();
    $selectedSubjects = SelectedSubject::where('user_id', $user->id)->with('course')->get();
    $courses = Course::all();

    return view('dashboard.index', compact('user', 'selectedSubjects', 'courses'));
}
}