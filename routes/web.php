<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\project;
use App\Http\Controllers\task;

 

Route::get('/', function () {
    return view('admin.index');
});

Route::view('login','admin.login');
Route::view('signup','admin.signup');
Route::view('home','admin.index');
Route::view('project','admin.project');
Route::view('task','admin.task');
Route::post('login',[User::Class,'login']);
Route::post('createproject',[project::Class,'createproject']);
Route::post('addtask',[task::Class,'createtask']);

