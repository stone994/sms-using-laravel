<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\Student_hobbiesController;
use Illuminate\Support\Facades\Route;

Route::resource('/students',StudentController::class);
