<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WeatherController;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/generador',[HomeController::class,'generar'])->name('generar');
Route::get('/imprimir',[HomeController::class,'imprimir'])->name('imprimir');
Route::get('/imprimirvista',[HomeController::class,'imprimirvista'])->name('imprimirvista');
Route::get('/imprimirvista2',[HomeController::class,'imprimirvista2'])->name('imprimirvista2');
Route::get('/consumir',[WeatherController::class,'index'])->name('index');

Route::get('/cat',[CatController::class,'show'])->name('cat');

//Route::get('/', [WeatherController::class, 'show']);
Route::get('/search', [WeatherController::class, 'search'])->name('search');


