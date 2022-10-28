<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; //add the ControllerNameSpace



Route::resource("/student", StudentController::class);




Route::resource("/contact", StudentController::class);
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
