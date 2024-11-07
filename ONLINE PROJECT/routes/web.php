<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\LoginAdmin;

use App\Jobs\SendWelcomeEmailJob;

Route::get('test', function () {
    $details['name'] = 'JOB with Queue ';
    $details['email'] = 'engineer.birgul@gmail.com';

    dispatch(new SendWelcomeEmailJob($details));

    dd('sent');
});

Route::middleware([LoginAdmin::class])->group(function () {
    $user_email = Session::get('user_email');
    return view('login',compact('user_email'));
});



Route::get('/OnlineSystem', [LoginController::class, 'OnlineSystem'])->name('login');
Route::post('/BeRegister', [LoginController::class,'BeRegister'])->name('beRegister');


Route::post('/LoginSystem', [LoginController::class,'LoginSystem'])->name('LoginSystem');
Route::get('/register', [LoginController::class,'Register'])->name('register');


Route::get('/exit', [LoginController::class, 'Login'])->name('exit');
