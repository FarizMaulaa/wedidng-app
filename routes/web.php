<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Deskripsi;
use App\Livewire\Listgedung;


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

Route::get('/hds', function () {
    return view('welcome');
});

Route::get('/', Home::class);

Route::get('/deskripsi', Deskripsi::class);

Route::get('/listgedung', Listgedung::class);