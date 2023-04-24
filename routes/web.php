<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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



Route::get('/', [MenuController::class, 'inicio' ]);
// ->name('inicio');
Route::get('/calendario', [MenuController::class, 'calendario' ])->name('calendario');;

Route::get('/carreras', [MenuController::class, 'carreras'])->name('carreras');


Route::get('/carrera/{carrera}', [MenuController::class, 'carrera' ])->name('carrera');