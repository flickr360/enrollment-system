<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ScheduleController;

use Illuminate\Support\Facades\Auth;


//API
use App\Http\Controllers\CourseController;



// web.php


//Subject Controller
use App\Http\Controllers\SubjectController;
Route::get('/subjects/select', [SubjectController::class, 'showForm'])->name('subjects.select')->middleware('auth');
Route::post('/subjects/store', [SubjectController::class, 'store'])->name('subjects.store')->middleware('auth');
Route::get('/dashboard', [SubjectController::class, 'showDashboard'])->name('dashboard')->middleware('auth');

//Additional
Route::post('/select-subject', [DashboardController::class, 'selectSubject'])->name('select.subject');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/schedule', [ScheduleController::class, 'show'])->name('schedule');
Route::post('/submitCourse', [ScheduleController::class, 'submitCourse'])->name('submitCourse');

//update & delete
Route::delete('/delete-all-subjects', [ScheduleController::class, 'deleteAllSubjects'])->name('deleteAllSubjects');
Route::get('/subject/edit/{id}', [ScheduleController::class, 'editSubject'])->name('editSubject');
Route::put('/subject/update/{id}', [ScheduleController::class, 'updateSubject'])->name('updateSubject');
Route::delete('/subject/delete/{id}', [ScheduleController::class, 'deleteSubject'])->name('deleteSubject');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']); //login
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register'); //regis form
Route::post('/register', [RegisterController::class, 'register']);
Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); //dashboard
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); //logout
Route::middleware('auth')->get('/profile', [ProfileController::class, 'show'])->name('profile'); //profile
Route::middleware('auth')->post('/profile/update', [ProfileController::class, 'updateProfilePicture'])->name('updateProfilePicture'); //pfp
Route::get('/payment', [PaymentController::class, 'index'])->name('payment'); //payment
Route::middleware('auth')->get('/schedule', [ScheduleController::class, 'index'])->name('schedule');

// In routes/web.php

// Profile route to update profile picture


use App\Http\Controllers\UserController;

// Profile page route
Route::get('/profile', [UserController::class, 'profile'])->name('profile');

// Update profile picture route
Route::post('/profile-picture', [UserController::class, 'updateProfilePicture'])->name('updateProfilePicture');





