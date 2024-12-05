<?php

use App\Http\Controllers\MusicController;
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


Route::get('/', function () {
    return view('player');
})->name("player");
Route::get('/form', [MusicController::class, 'formPage'])->name("add-music-page");
Route::post('/form', [MusicController::class, 'addMusic'])->name("add-music-action");
Route::post('/api/songs', [MusicController::class, 'library'])->name("library");
