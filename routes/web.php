<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/job/{id}', [App\Http\Controllers\JobController::class, 'show'])->name('job.show');
Route::post('/job/save', [App\Http\Controllers\JobController::class, 'jobSave'])->name('job.save');
Route::post('/job/apply', [App\Http\Controllers\JobController::class, 'jobApply'])->name('job.apply');
Route::get('/category/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');
Route::get('/user/profile', [App\Http\Controllers\UserController::class, 'show'])->name('profile.show');
Route::get('/user/applied/jobs', [App\Http\Controllers\UserController::class, 'appliedJobs'])->name('profile.applied.jobs');
Route::get('/user/saved/jobs', [App\Http\Controllers\UserController::class, 'savedJobs'])->name('profile.saved.jobs');
