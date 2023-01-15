<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/student-applications', [App\Http\Controllers\AdminController::class, 'studentApplications'])->name('student-applications');
Route::post('/student-applications', [App\Http\Controllers\ApplicationController::class, 'edit'])->name('student-applications');

Route::get('/apply', function() {
    return view('apply');
});

Route::post('/apply', [App\Http\Controllers\ApplicationController::class, 'index']);