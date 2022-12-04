<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'school_id',
        'abrev',
    ];

    public function school() 
    {
        return $this->belongsTo(School::class);
    }

    public function courseUnit() {
        return $this->hasMany(CourseUnit::class);
    }
}
