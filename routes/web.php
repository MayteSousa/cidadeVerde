<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\EcopontoController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\OnlyUserController;

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
    return view('index');
})->name('inicio');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//PRECISA AUTENTICAR NO SISTEMA E SER ADMIN
//Route::resource('usuario', UserController::class)->middleware(['auth','admin']);
Route::resource('usuario', UserController::class)->middleware(['auth']);
//Route::resource('ecoponto', EcopontoController::class)->middleware(['auth']);
//Route::resource('administrador', AdministradorController::class)->middleware(['auth']);

Route::get('/profile', function () {
    return view('profile.index');
})->name('profile')->middleware(['auth']);

Route::get('change-password', [UserController::class, 'changePassword'])->name('change-password')->middleware(['auth']);

Route::post('change-password', [UserController::class, 'updatePassword'])->name('update-password')->middleware(['auth']);

Route::resource('contato', ContactController::class);

Route::resource('admin', AdminController::class);

Route::resource('ecoponto',EcopontoController::class);

Route::get('home', [HomeController::class, 'contarUsuarios'])->name('home')->middleware(['auth']);

Route::resource('onlyuser',OnlyUserController::class);