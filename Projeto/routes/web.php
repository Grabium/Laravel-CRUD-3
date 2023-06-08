<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produtos_Contr;
use App\Http\Controllers\HomePage_Contr;

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

Route::get('/', [HomePage_Contr::class,'loadPageHome'])->name('home');

Route::get('/produtos/pageCriar', [Produtos_Contr::class, 'loadPageCriar'])->name('loadPageCriar');
Route::post('/produtos/criar', [Produtos_Contr::class, 'criar'])->name('criar');