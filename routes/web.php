<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;

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

// Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {
    //listar
    Route::get('/', [CarroController::class, 'index'])->name('carros.index');

    // crear
    Route::get('/carros/create', [CarroController::class, 'create'])->name('carros.create');
    Route::post('/carros', [CarroController::class, 'store'])->name('carros.store');

    //editar
    Route::get('/carros/{carro}/edit', [CarroController::class, 'edit'])->name('carros.edit');
    Route::put('/carros/{carro}', [CarroController::class, 'update'])->name('carros.update');

    //eliminar
    Route::delete('/carros/{carro}', [CarroController::class, 'destroy'])->name('carros.destroy')->middleware('eliminar');;
});

require __DIR__.'/auth.php';
