<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view(view: 'about');
})->name('about');

// Route::get('admin/courses',function(){
//     return view('admin.courses.index');
// });


// gorup routes for admin panel
Route::prefix('admin')->group(function () {


    Route::get('/dashboard', function () {
        return view('admin.dashboard');

    })->name('admin.dashboard');

    Route::resource('courses', CourseController::class);

    // Route::get('/login', function () {

    //     return view('admin.auth.login');
    // });
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
  
});

// Route::prefix('admin')->middleware('auth')->group(function () {
   
// });

// Route::delete('courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

// Route::get('courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');

// Route::put('courses/{course}', [CourseController::class, 'update'])->name('courses.update');

// Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');

// Route::post('courses', [CourseController::class, 'store'])->name('courses.store');

// Route::get('courses/{course}', [CourseController::class, 'show'])->name('courses.show');

// Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
