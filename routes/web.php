<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [UserController::class, 'inicio' ]);
// ->name('inicio');
Route::get('/calendario', [UserController::class, 'calendario' ])->name('calendario');;

Route::get('/carreras', [UserController::class, 'carreras'])->name('carreras');


Route::get('/carrera/{carrera}', [UserController::class, 'carrera' ])->name('carrera');