<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Deposits;
use App\Http\Livewire\SimpleCrud;
use App\Http\Livewire\FormDeposit;
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

route::get('/',Home::class);
Route::get('/simple-crud', SimpleCrud::class)->name('simplecrud');
Route::get('/form-deposit', FormDeposit::class)->name('formdeposit');
Route::get('/deposit', Deposits::class)->name('deposit');
