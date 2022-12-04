<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'abrev',
    ];

    public function course() {
        return $this->hasMany(Course::class);
    }

    public function unit() {
        return $this->hasMany(Unit::class);
    }
}
