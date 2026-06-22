<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\StudentHobbiesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Loader\Configurator\Routes;

Route::get('/',function(){
    return view('welcome');
});
Route::view('register','register')->name('register');
Route::post('registerSave',[UserController::class, 'register'])->name('registerSave');
Route::view('login','login')->name('login');
Route::post('loginMatch',[UserController::class, 'login'])->name('loginMatch');
Route::resource('/students',StudentController::class);
