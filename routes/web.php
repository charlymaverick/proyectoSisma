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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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

});
