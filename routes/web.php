<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\familycontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get( '/' ,  function () {
     return view('home');
} );
Route::get( '/register' ,  [RegisterController::class , 'index'] )->name('register');
Route::post( '/register' ,  [RegisterController::class , 'create'] )->name('register');
Route::prefix( '/login')->group( function(){
     Route::get( "/", [LoginController::class , 'index'] )->name('login');
    Route::post( "/", [LoginController::class , 'login'] )->name('login');
}) ;

