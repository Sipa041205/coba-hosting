<?php

use App\Http\Controllers\jennie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\jennies;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/a', [jennie::class, 'tampil']);

Route::get('/a/tambah', [jennie::class, 'tambah']);
Route::post('/a/store',[jennie::class, 'store']);
Route::get('/a/hapus/{ID}',[jennie::class, 'hapus']);
Route::post('/a/update',[jennie::class, 'update']);
Route::get('/a/edit/{ID}',[jennie::class, 'edit']);
Route::get('/a/cetak_pdf',[jennie::class, 'cetak_pdf']);




