<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\SelectedSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index()
    {
        // Fetch the list of courses from the database
        $courses = Course::all(); // Or use a different query to get specific courses

        // Pass the courses to the schedule view
        return view('schedule', compact('courses'));
    }
    public function dashboard()
    {
        $user = auth()->user(); 
        $userId = $user->user_id;
    
        $selectedSubjects = $user->selectedSubjects; 
    
        // Pass the data to the view
        return view('dashboard.index', [
            'user' => $user,
            'selectedSubjects' => $selectedSubjects,
        ]);
    }

    public function deleteAllSubjects()
{
    $userID = Auth::user()->id;

    // delete all subject for the current user
    SelectedSubject::where('user_id', $userID)->delete();

    return redirect()->route('dashboard')->with('success', 'All selected courses have been deleted.');
}


    public function submitCourse(Request $request)
    {

        $validated = $request->validate([
            'selected_subjects' => 'required|array|min:1',
            'selected_subjects.*' => 'integer', 
        ]);

        $userID = Auth::user()->id;

        // Loop through the selected subjects and store them in the database if not already added
        foreach ($validated['selected_subjects'] as $courseId) {
            // Check if the course is already selected by the user
            $exists = SelectedSubject::where('user_id', $userID)
                ->where('course_id', $courseId)
                ->exists();

            if (!$exists) {
                SelectedSubject::create([
                    'user_id' => $userID,
                    'course_id' => $courseId,
                ]);
            }
        }

        return redirect()->route('dashboard')->with('success', 'Courses added successfully');
    }


public function deleteSubject($id)
{
    $subject = SelectedSubject::findOrFail($id);

    $subject->delete();

    return redirect()->route('dashboard')->with('success', 'Course deleted successfully.');
}

}
