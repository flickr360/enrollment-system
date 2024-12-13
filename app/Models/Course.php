<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Fillable attributes for mass assignment
    protected $fillable = ['subject', 'section', 'time', 'days'];

    // Define any relationships, for example, a Course has many SelectedSubjects
    public function selectedSubjects()
    {
        return $this->hasMany(SelectedSubject::class);
    }
}