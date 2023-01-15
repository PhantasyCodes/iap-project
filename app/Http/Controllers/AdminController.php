<?php

namespace App\Http\Controllers;

use App\Models\StudentApplication;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function studentApplications() {
        $applications = StudentApplication::all();
        return view('admin.studentapplications', ['applications'=>$applications]);
    }
}
