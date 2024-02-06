<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhoneController;

Route::redirect('/','/users');
Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users',[UserController::class,'store'])-> name('users.store');

Route::controller(PhoneController::class)->group(function(){
    Route::get('phones','index');
    Route::get('phones/create','create');
    Route::post('phones','store');
    Route::get('phones/{phone}','show');
    Route::get('phones/{phone}/edit','edit');
    Route::put('phones/{phone}/update','update');
    Route::delete('phones/{phone}','destroy');
});