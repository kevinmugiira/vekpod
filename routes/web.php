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
    return view('vekpod.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/vekpod.index', function () {
        return view('vekpod.index');
    })->name('index');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // backend
    Route::get('category-add', [\App\Http\Controllers\Backend\CategoryController::class, 'index']);
    Route::post('category-store', [\App\Http\Controllers\Backend\CategoryController::class, 'store']);
    Route::get('episode-add', [\App\Http\Controllers\Backend\EpisodeController::class, 'create']);
    Route::post('episode-store', [\App\Http\Controllers\Backend\EpisodeController::class, 'store']);
    Route::post('podcast-add', [\App\Http\Controllers\Backend\PodcastController::class, 'store']);

});

// google auth routes
Route::get('auth/google', [\App\Http\Controllers\GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [\App\Http\Controllers\GoogleAuthController::class, 'callBackGoogle']);
Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Route
     */
    Route::get('/logout', [\App\Http\Controllers\Auth\LogoutController::class,'logout'])->name('logout');
});


// frontend
Route::get('index', [\App\Http\Controllers\IndexController::class, 'index']);
Route::get('home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('browse', [\App\Http\Controllers\BrowseController::class, 'index']);
Route::get('player', [\App\Http\Controllers\PlayerController::class, 'index']);
Route::get('rtl', [\App\Http\Controllers\RtlController::class, 'index']);
Route::get('artist', [\App\Http\Controllers\Frontend\ArtistController::class, 'index']);
Route::get('detail', [\App\Http\Controllers\Frontend\ArtistController::class, 'detail']);
Route::get('track', [\App\Http\Controllers\PodController::class, 'index']);
Route::get('chart', [\App\Http\Controllers\ChartController::class, 'index']);
Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'index']);



