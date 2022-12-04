<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'classroom_id',
        'course_unit_id',
        'file_url',
        'comment',
    ];

    public function classroom() {
        return $this->belongsTo(Classroom::class);
    }

    public function courseUnit() {
        return $this->belongsTo(CourseUnit::class);
    }

    public function assignmentSubmission() {
        return $this->hasMany(AssignmentSubmission::class);
    }
}
