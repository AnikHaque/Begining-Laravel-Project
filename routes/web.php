<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [WelcomeController::class,'sayHello']);
Route::get('/hellofromostad',[WelcomeController::class,'courseName']);
Route::get('/dashboard',[WelcomeController::class,'dashboard']);
Route::get('/dashboard/{name}',[WelcomeController::class,'dynamic']);