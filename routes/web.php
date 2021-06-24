<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CuestionariosController;
use App\Http\Controllers\RoleController;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/cuestionarios', [App\Http\Controllers\HomeController::class, 'index'])->name('cuestionarios.store');

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'indexAdmin'])->name('admin.home');
    Route::get('/roles', [RoleController::class, 'index'])->name('roles');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles/store', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/delete/{id}', [RoleController::class, 'destroy'])->name('roles.delete');
    Route::get('/roles/edit/{id}', [RoleController::class, 'edit'])->name('roles.edit');
    Route::post('/roles/update', [RoleController::class, 'update'])->name('roles.update');


    //Creacion de cuestionarios

    Route::get('/cuestionarios', [CuestionariosController::class, 'index'])->name('cuestionarios');
    Route::get('/cuestionarios/create', [CuestionariosController::class, 'create'])->name('cuestionarios.create');
    Route::post('/cuestionarios/store', [CuestionariosController::class, 'store'])->name('cuestionarios.store');
    Route::get('/cuestionarios/delete/{id}', [CuestionariosController::class, 'destroy'])->name('cuestionarios.delete');
    Route::get('/cuestionarios/edit/{id}', [CuestionariosController::class, 'edit'])->name('cuestionarios.edit');
    Route::post('/cuestionarios/update', [CuestionariosController::class, 'update'])->name('cuestionarios.update');


    //Creacion noticioas

    Route::get('logout', [LoginController::class, 'logout']);
    Route::get('/cuestionarios', [App\Http\Controllers\CuestionariosController::class, 'index'])->name('cuestionarios');
    Route::get('/cuestionarios/create', [App\Http\Controllers\NoticiasController::class, 'create'])->name('cuestionarios.create');
    Route::get('/cuestionarios/delete', [App\Http\Controllers\NoticiasController::class, 'delete'])->name('cuestionario.delete');
    Route::get('/cuestionarios/show', [App\Http\Controllers\NoticiasController::class, 'show'])->name('cuestionarios.show');
    Route::get('/cuestionarios/store', [App\Http\Controllers\NoticiasController::class, 'store'])->name('cuestionarios.store');
    Route::get('/cuestionarios/edit', [App\Http\Controllers\NoticiasController::class, 'edit'])->name('cuestionarios.edit');
    Route::get('/cuestionarios/update', [App\Http\Controllers\NoticiasController::class, 'update'])->name('cuestionarios.update');

    Route::get('/calendario', [App\Http\Controllers\HomeController::class, 'indexcalendario'])->name('calendarios');
    Route::get('/calendario/create', [App\Http\Controllers\NoticiasController::class, 'create'])->name('cuestionarios.update');
    Route::get('/calendario/delete', [App\Http\Controllers\NoticiasController::class, 'delete'])->name('cuestionarios.update');
    Route::get('/calendario/show', [App\Http\Controllers\NoticiasController::class, 'show'])->name('cuestionarios.update');
    Route::get('/calendario/store', [App\Http\Controllers\NoticiasController::class, 'store'])->name('cuestionarios.update');
    Route::get('/calendario/edit', [App\Http\Controllers\NoticiasController::class, 'edit'])->name('cuestionarios.update');
    Route::get('/calendario/update', [App\Http\Controllers\NoticiasController::class, 'update'])->name('cuestionarios.update');


    Route::get('/noticias', [App\Http\Controllers\NoticiasController::class, 'index'])->name('noticias');
    Route::get('/noticias/create', [App\Http\Controllers\NoticiasController::class, 'create'])->name('noticias.create');
    Route::get('/noticias/delete', [App\Http\Controllers\NoticiasController::class, 'delete'])->name('noticias.delete');
    Route::get('/noticias/show', [App\Http\Controllers\NoticiasController::class, 'show'])->name('noticias.show');
    Route::get('/noticias/store', [App\Http\Controllers\NoticiasController::class, 'store'])->name('noticias.store');
    Route::get('/noticias/edit', [App\Http\Controllers\NoticiasController::class, 'edit'])->name('noticias.edit');
    Route::get('/noticias/update', [App\Http\Controllers\NoticiasController::class, 'update'])->name('noticias.update');


    Route::get('/eventos', [App\Http\Controllers\EventosController::class, 'index'])->name('eventos');
    Route::get('/eventos/create', [App\Http\Controllers\NoticiasController::class, 'create'])->name('eventos.create');
    Route::get('/eventos/delete', [App\Http\Controllers\NoticiasController::class, 'delete'])->name('eventos.delete');
    Route::get('/eventos/show', [App\Http\Controllers\NoticiasController::class, 'show'])->name('eventos.show');
    Route::get('/eventos/store', [App\Http\Controllers\NoticiasController::class, 'store'])->name('eventos.store');
    Route::get('/eventos/edit', [App\Http\Controllers\NoticiasController::class, 'edit'])->name('eventos.edit');
    Route::get('/eventos/update', [App\Http\Controllers\NoticiasController::class, 'update'])->name('eventos.update');

    Route::get('/reportes', [App\Http\Controllers\HomeController::class, 'reportes'])->name('reportes');


    Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios');
    Route::get('/usuarios/create', [App\Http\Controllers\NoticiasController::class, 'create'])->name('usuarios.create');
    Route::get('/usuarios/delete', [App\Http\Controllers\NoticiasController::class, 'delete'])->name('usuarios.delete');Route::get('/eventos/update', [App\Http\Controllers\NoticiasController::class, 'update'])->name('eventos.update');
    Route::get('/usuarios/show', [App\Http\Controllers\NoticiasController::class, 'show'])->name('usuarios.show');
    Route::get('/usuarios/store', [App\Http\Controllers\NoticiasController::class, 'store'])->name('usuarios.store');
    Route::get('/usuarios/edit', [App\Http\Controllers\NoticiasController::class, 'edit'])->name('usuarios.edit');
    Route::get('/usuarios/update', [App\Http\Controllers\NoticiasController::class, 'update'])->name('usuarios.update');







});
