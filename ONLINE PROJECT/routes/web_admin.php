<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InfoController;



Route::post('/welcome', [LoginController::class, 'Login'])->name('loginWithWelcome');

Route::get('/aboutUs',[InfoController::class,'AboutUs'])->name('AboutUs');
Route::get('/takeAppointment',[InfoController::class,'TakeAppointment'])->name('AboutUs');
Route::post('/saveAppointment',[InfoController::class,'SaveAppointment'])->name('SaveAppointment');
