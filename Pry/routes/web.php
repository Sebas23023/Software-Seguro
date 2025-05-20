<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\BebesController;
use App\Http\Controllers\NinosController;
use App\Http\Controllers\AdultosController;
use App\Http\Controllers\AncianosController;
use App\Http\Controllers\JovenesController;
use App\Http\Controllers\MayoresController;
use App\Http\Controllers\LongevosController;
use App\Http\Controllers\AdolecentesController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/custom', [LoginController::class, 'authenticate'])->name('login.custom');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente');
Route::get('/bebes', [BebesController::class, 'index'])->name('bebes');
Route::get('/ninos', [NinosController::class, 'index'])->name('ninos');
Route::get('/adultos', [AdultosController::class, 'index'])->name('adultos');
Route::get('/ancianos', [AncianosController::class, 'index'])->name('ancianos');
Route::get('/jovenes', [JovenesController::class, 'index'])->name('jovenes');
Route::get('/mayores', [MayoresController::class, 'index'])->name('mayores');
Route::get('/longevos', [LongevosController::class, 'index'])->name('longevos');
Route::get('/adolescentes', [AdolecentesController::class, 'index'])->name('adolescentes');
