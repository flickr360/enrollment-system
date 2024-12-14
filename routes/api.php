<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\Api\SelectedSubjectController;

Route::get('selected-subjects', [SelectedSubjectController::class, 'index']); // get all selected subj
Route::get('selected-subjects/{id}', [SelectedSubjectController::class, 'show']); // get the specific selected subj
Route::post('selected-subjects', [SelectedSubjectController::class, 'store']); // add a selected subject
Route::delete('selected-subjects/{id}', [SelectedSubjectController::class, 'destroy']); // remove   


use App\Http\Controllers\Api\CourseController;

Route::get('courses', [CourseController::class, 'index']); // Fetch all courses
Route::get('courses/{id}', [CourseController::class, 'show']); // Fetch a specific course by ID


use App\Http\Controllers\Api\UserController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user/selected-subjects', [UserController::class, 'selectedSubjects']);
    Route::get('user/dashboard', [UserController::class, 'dashboard']);
});



