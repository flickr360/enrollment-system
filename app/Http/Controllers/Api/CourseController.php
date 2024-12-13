<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Get all courses
    public function index()
    {
        // Fetch all courses from the database
        $courses = Course::all();

        // Return the courses as a JSON response
        return response()->json($courses);
    }

    // Get a specific course by ID
    public function show($id)
    {
        // Find a course by ID
        $course = Course::find($id);

        // Handle case when the course is not found
        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        // Return the course as a JSON response
        return response()->json($course);
    }
}
