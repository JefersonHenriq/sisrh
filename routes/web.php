<?php

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
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


Route::get('/', function () {
    return view('index');
});
*/
//Rotas de Login
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

//Rotas Usuários
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/store', [UsuarioController::class, 'store'])->name('usuarios.store');

//Rota DashBoard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

//Funcionário
Route::get('/funcionarios', [FuncionarioController::class,'index'])->name('funcionarios.index');
Route::get('/funcionarios/create', [FuncionarioController::class,'create'])->name('funcionarios.create');
Route::post('/funcionarios', [FuncionarioController::class,'store'])->name('funcionarios.store');
Route::get('/funcionarios/edit/{id}', [FuncionarioController::class,'edit'])->name('funcionarios.edit');
Route::put('/funcionarios/{id}', [FuncionarioController::class,'update'])->name('funcionarios.update');
Route::delete('/funcionarios/{id}', [FuncionarioController::class,'destroy'])->name('funcionarios.destroy');
//Cargo
Route::get('/cargos/index', [CargoController::class,'index'])->name('cargos.index');
Route::get('/cargos/create', [CargoController::class,'create'])->name('cargos.create');
Route::post('/cargos', [CargoController::class,'store'])->name('cargos.store');
//Departamento
Route::get('/departamentos/index', [DepartamentoController::class, 'index'])->name('departamentos.index');
Route::get('/departamentos/create', [DepartamentoController::class, 'create'])->name('departamentos.create');
Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamentos.store');