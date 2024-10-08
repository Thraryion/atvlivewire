<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Anotacoes;
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

Route::get('/home', Home::class);
Route::get('/anotacoes', Anotacoes::class);

Route::get('/', function () {
    return view('welcome');
});
