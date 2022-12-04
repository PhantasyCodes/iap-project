<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'name',
    ];

    public function course() {
        $this->belongsTo(Course::class);
    }

    public function announcement() {
        $this->hasMany(Announcement::class);
    }

    public function classStudent() {
        return $this->hasMany(ClassStudent::class);
    }

    public function assignment() {
        return $this->hasMany(Assignment::class);
    }
}
