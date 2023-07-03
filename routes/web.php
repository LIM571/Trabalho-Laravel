<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\incricaoLutadores;
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

Route::get('/form', function () {
    return view('lutador');
})->name('form');



//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/form', [incricaoLutadores::class, 'formulario'])->name('form')->middleware('auth');
Route::post('/form', [incricaoLutadores::class, 'enviar'])->name('enviar')->middleware('auth');

Route::get('/dashboard', [incricaoLutadores::class, 'exibir'])->name('dashboard')->middleware('auth');
Route::get('/', [incricaoLutadores::class, 'welcome'])->name('welcome');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
Route::get('/apaga/{id}', [incricaoLutadores::class, 'apaga']);
Route::get('/edita/{id}', [incricaoLutadores::class, 'edita']);
Route::post('/atualiza/{id}', [incricaoLutadores::class, 'atualiza']);




require __DIR__.'/auth.php';
