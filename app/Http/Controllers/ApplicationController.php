<?php

namespace App\Http\Controllers;

use App\Models\StudentApplication;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    function index(Request $req) {
        StudentApplication::create([
            'name' => $req['name'],
            'email' => $req['email'],
        ]);
        return view('welcome');
    }

    public function edit(Request $request) {
        $input = $request->all();

        $studentApplication = StudentApplication::find($input['id']);
        $studentApplication->state = $input['state'];

        $applications = StudentApplication::all();
        return view('admin.studentapplications', ['applications'=>$applications]);
    }
}
