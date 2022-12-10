<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/job_posting', [App\Http\Controllers\HomeController::class, 'show'])->name('job_posting');

Route::get('/new_job', function () {
    return view('job_posting.new_job');
});
Route::get('/new_job2', function () {
    return view('job_posting.new_job2');
});
Route::get('/new_job3', function () {
    return view('job_posting.new_job3');
});
Route::get('/new_job4', function () {
    return view('job_posting.new_job4');
});
