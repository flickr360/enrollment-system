<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // attributes
    protected $fillable = ['subject', 'section', 'time', 'days'];

    // relationship for course and selected subject
    public function selectedSubjects()
    {
        return $this->hasMany(SelectedSubject::class);
    }
}