<?php

use App\Http\Controllers\ControllerProof_1;
use App\Http\Controllers\Proof1Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[ControllerProof_1::class, '__invoke'])->name('welcome');

Route::get('Dashboard', [Proof1Controller::class, 'index'])->name('Dashboard.home');

