<?php

use App\Http\Controllers\Auth\LoginController;
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

    Route::get('logout', [LoginController::class, 'logout']);
    Route::get('/cuestionarios', [App\Http\Controllers\CuestionariosController::class, 'index'])->name('cuestionarios');
    Route::get('/calendario', [App\Http\Controllers\HomeController::class, 'indexcalendario'])->name('calendarios');
    Route::get('/noticias', [App\Http\Controllers\NoticiasController::class, 'index'])->name('noticias');
    Route::get('/noticias/create', [App\Http\Controllers\NoticiasController::class, 'create'])->name('noticias.create');

    Route::get('/eventos', [App\Http\Controllers\EventosController::class, 'index'])->name('eventos');
    Route::get('/reportes', [App\Http\Controllers\HomeController::class, 'reportes'])->name('reportes');
    Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios');



});
