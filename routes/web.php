<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Middleware\CheckToken;

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


Route::get('/album', [AlbumController::class, 'index'])->name('album');
Route::get('/album/test', [AlbumController::class, 'test']);

Route::middleware([CheckToken::class])->group(function () {
    Route::get('/album/token', [AlbumController::class, 'token']); // http://laravel.loc/album/token?token=my-secret-token
});