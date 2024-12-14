<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // get all courses
    public function index()
    {
        // fetch all courses
        $courses = Course::all();

        // return to JSON format
        return response()->json($courses);
    }

    // get specific courseID
    public function show($id)
    {
        // Find a course by ID
        $course = Course::find($id);

        // 
        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        // return to JSON format
        return response()->json($course);
    }
}
