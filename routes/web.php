<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporController;
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
    return view('input.Aspirasi');
});
Route::get('/pend', 'PendudukController@index');
Route::get('/landing', function () {
    return view('input.Aspirasi2');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('Penduduk','PendudukController');
Route::resource('Input','InputController');
Route::resource('Kategori','KategoriController');
Route::resource('Aspirasi','AspirasiController');
Route::resource('Comment','CommentController');
Route::resource('Lapor','LaporController');
Route::get('/search', [LaporController::class, 'search'])->name('search');  