<?php

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('index', [\App\Http\Controllers\IndexController::class, 'index']);
Route::get('home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('browse', [\App\Http\Controllers\BrowseController::class, 'index']);
Route::get('player', [\App\Http\Controllers\PlayerController::class, 'index']);
Route::get('rtl', [\App\Http\Controllers\RtlController::class, 'index']);
Route::get('artist', [\App\Http\Controllers\ArtistController::class, 'index']);
Route::get('detail', [\App\Http\Controllers\ArtistController::class, 'detail']);
Route::get('track', [\App\Http\Controllers\PodController::class, 'index']);
Route::get('chart', [\App\Http\Controllers\ChartController::class, 'index']);
