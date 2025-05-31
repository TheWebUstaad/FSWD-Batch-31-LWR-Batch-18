<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
    
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/login',[AuthController::class, 'ShowloginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('do.login');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

}
);


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

}
);





//  Route::middleware(['auth'])->group(function (){
//          Route::get('admin/', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');

//     });