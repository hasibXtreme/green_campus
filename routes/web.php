<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentregController;

Route::get('/', [StudentregController::class,'create'])->name('register.create');
Route::post('/register',[StudentregController::class,'store'])->name('register.store');
