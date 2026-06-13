<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\ClassroomsController;
 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // -------classrooms routes------
    Route::get('/dashboard/classrooms',[ClassroomsController::class,'index']);
    Route::post('/dashboard/classrooms',[ClassroomsController::class,'store']);
    //-------------------------------


    // -------students routes------
    Route::get('/dashboard/students',[StudentController::class,'index']);
    Route::post('/dashboard/students',[StudentController::class,'store']);
    Route::get('/dashboard/students/delete/{id}',[StudentController::class,'deleteStd']);
    Route::post('/dashboard/students/edit/{id}',[StudentController::class,'editStd']);
    //---------------------------

    //--------teachers routes------------  
      Route::get('/dashboard/teachers',[TeachersController::class,'index']);
      Route::post('/dashboard/teachers',[TeachersController::class,'store']);
    Route::get('/dashboard/teachers/delete/{id}',[TeachersController::class,'deleteTeacher']);
    //-----------------------------------

});

require __DIR__.'/auth.php';
