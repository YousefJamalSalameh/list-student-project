<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController as StudentController;
use Illuminate\Foundation\Application;
use Inertia\Inertia;

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





    Route::get('/index',[StudentController::class,'index'])->name('index');
    Route::post('/store',[StudentController::class,'store'])->name('store');
    Route::get('/show',[StudentController::class,'show'])->name('student.show');





