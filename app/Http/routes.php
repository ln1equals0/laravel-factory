<?php

use App\User;
use App\Lesson;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function() {
    $user = new User();
    $users = $user->all();
    return view('home.user', compact('users'));
});

Route::get('/lessons', function() {
    $lesson = new Lesson();
    $lessons = $lesson->all();
    return view('home.lesson', compact('lessons'));
});