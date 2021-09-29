<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;


Route::get('/',[MyController::class, 'viewLoad'])->name('');
Route::get('/about',[MyController::class, 'aboutPage'])->name('about.show');
Route::get('/service',[MyController::class, 'servicePage'])->name('service.show');
Route::get('/ourTeam',[MyController::class, 'teamPage'])->name('ourTeam.show');
Route::get('/contact',[MyController::class, 'contactPage'])->name('contact');
Route::post('/contact',[MyController::class, 'contact'])->name('contact');
Route::get('/users',[UserController::class, 'getDate'])->name('users');
Route::post('/users/home', [UserController::class, 'sumbit'])->name('users');
Route::get('/registration',[UserController::class, 'getReg'])->name('registration');
Route::post('/registration',[UserController::class, 'reg'])->name('registration');