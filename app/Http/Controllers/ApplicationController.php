<?php

namespace App\Http\Controllers;

use App\Models\StudentApplication;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    function index(Request $req) {
        return StudentApplication::create([
            'name' => $req['name'],
            'email' => $req['email'],
        ]);
        // return $req['name'];
    }
}
