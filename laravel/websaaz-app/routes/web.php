<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view(view: 'about');
})->name('about');


Route::get('admin/dashboard',function () {
    return view('admin.dashboard');

})->name('admin.dashboard');

// Route::get('admin/courses',function(){
//     return view('admin.courses.index');
// });


Route::resource('courses', CourseController::class);