<?php

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
    return view('welcome');
});

//show all student
Route::get('/student', function () {
    return view('student');
});
Route::get('/student/signup', function () {
    return view('signup');
});

Route::post('/student/addStudent',['uses'=>'studentController@addStudent']);
