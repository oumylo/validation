<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;


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
    return view('welcome');
});


Route::get('livres/create', [LivreController::class, 'create'])->name('livres.create');
Route::post('livres', [LivreController::class, 'store'])->name('livres.store');
Route::get('livres/liste', [LivreController::class, 'index'])->name('livres.liste');


