<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SelectedSubject;
use Illuminate\Http\Request;

class SelectedSubjectController extends Controller
{
    // Fetch all selected subjects
    public function index()
    {
        $selectedSubjects = SelectedSubject::with(['course', 'user'])->get();
        return response()->json($selectedSubjects);
    }

    // Fetch a specific selected subject
    public function show($id)
    {
        $selectedSubject = SelectedSubject::with(['course', 'user'])->find($id);

        if (!$selectedSubject) {
            return response()->json(['message' => 'Selected Subject not found'], 404);
        }

        return response()->json($selectedSubject);
    }

    // Add a selected subject
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        $selectedSubject = SelectedSubject::create($validatedData);
        return response()->json($selectedSubject, 201);
    }

    // Delete a selected subject
    public function destroy($id)
    {
        $selectedSubject = SelectedSubject::find($id);

        if (!$selectedSubject) {
            return response()->json(['message' => 'Selected Subject not found'], 404);
        }

        $selectedSubject->delete();
        return response()->json(['message' => 'Selected Subject deleted successfully']);
    }
}
