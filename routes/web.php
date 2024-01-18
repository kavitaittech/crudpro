<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/login', function () {
    return view('sign-in');
});



Route::get('/users', function () {
    return view('users');
});




Route::controller(AuthController::class)->group(function(){
  Route::post("sign-up","UserAuth")->name("sign-up");
  Route::get("users",'getUsers')->name('users');
  Route::get('edit/{id}',"getEditUsers")->name('edit');
  Route::post('edit','userUpdate')->name('edit');
  
});