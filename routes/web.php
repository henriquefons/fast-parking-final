<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClientController;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\Admin\HistoryController;

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

// Route::redirect('/', '/vehicle'); //Redireciona a pagina

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::resource('clients', ClientController::class)->except(['show']);
Route::resource('vagas', VacancyController::class)->except(['show', 'destroy']);
Route::resource('historico', HistoryController::class)->only(['index']);
