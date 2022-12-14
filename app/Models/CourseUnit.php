<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'unit_id',
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function unit() {
        return $this->belongsTo(Unit::class);
    }

    public function exam() {
        return $this->hasMany(Exam::class);
    }

    public function assignment() {
        return $this->hasMany(Assignment::class);
    }
}
