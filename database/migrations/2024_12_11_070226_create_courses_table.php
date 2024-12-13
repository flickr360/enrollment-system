<?php
use App\Models\Course;
use App\Models\SelectedSubject;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('subject'); // Course name, e.g., Math 101
            $table->string('section'); // Course section, e.g., Section 1
            $table->string('time'); // Course time, e.g., 8 AM to 9 AM
            $table->string('days'); // Course days, e.g., Monday,Wednesday
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }

    public function index()
{
    $user = auth()->user();
    $selectedSubjects = SelectedSubject::where('user_id', $user->id)->with('course')->get();
    $courses = Course::all(); // This should now work correctly

    return view('dashboard.index', compact('user', 'selectedSubjects', 'courses'));
}
}
