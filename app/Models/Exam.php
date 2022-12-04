<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_unit_id',
        'file_url',
    ];

    public function courseUnit() {
        return $this->belongsTo(CourseUnit::class);
    }

    public function examSubmission() {
        return $this->hasMany(ExamSubmission::class);
    }
}
