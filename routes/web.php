<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionariosController;

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
    return view('inicio');
})->name('funcionarios.inicio');

Route::get('/funcionarios', [FuncionariosController::class, 'index'])->name('funcionarios.index');
Route::get('/formulario', [FuncionariosController::class, 'show'])->name('funcionarios.show');
Route::post('/formulario', [FuncionariosController::class, 'store'])->name('funcionarios.store');
Route::get('/funcionario/{rut_funcionario}', [FuncionariosController::class, 'rut'])->name('funcionario');