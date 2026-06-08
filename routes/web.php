<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

route::get('/login', function () {
    return view('login');
});

route::get('/dashboard',function(){
    return view('dashboard');
});

Route::get('/dashboard/classes', function () {
    return view("classes");
});

Route::get('/dashboard/students', function () {
    return view("students");
});

Route::get('/dashboard/teachers', function () {
    return view("teachers");
});