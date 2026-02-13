<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
// 
Route::get('/', function () {
    return view('welcome');
});
// 

Route::resource('/admin', StudentController::class);
// 
Route::resource('/admin/add-student', StudentController::class);
