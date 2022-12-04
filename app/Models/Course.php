<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'school_id',
        'type',
    ];

    public function school() 
    {
        return $this->belongsTo(School::class);
    }

    public function classroom() {
        return $this->hasMany(Classroom::class);
    }

    public function courseUnit() {
        return $this->hasMany(CourseUnit::class);
    }
}
