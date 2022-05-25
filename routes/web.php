<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\UserEcopontoController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\OnlyUserController;
use \App\Http\Controllers\EcopontoController;

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

#ROTA INICIAL COM MAPA
Route::get('/', [EcopontoController::class, 'gmaps'])->name('inicio');


#FALE CONOSCO
Route::resource('contato', ContactController::class);


#ROTAS DE AUTENTICAÇÃO
Auth::routes();


#HOME APÓS AUTENTICAÇÃO
Route::get('/home', [HomeController::class, 'index'])->name('home');

#EXIBE NA HOME QUANTIDADEDE USUARIOS
Route::get('home', [HomeController::class, 'contarUsuarios'])->name('home')->middleware(['auth']);

#PROFILE
Route::get('/profile', function () {
    return view('admin.profile.index');
})->name('profile')->middleware(['auth']);


#CHANCE PASSWORD
Route::get('change-password', [UserController::class, 'changePassword'])
->name('change-password')->middleware(['auth']);

Route::post('change-password', [UserController::class, 'updatePassword'])
->name('update-password')->middleware(['auth']);


#USUARIO COMUM
Route::resource('user_only',OnlyUserController::class)->middleware(['auth']);


#USUARIO ECOPONTO
Route::resource('user_ecoponto',UserEcopontoController::class)->middleware(['auth']);


#USUARIO ADMINISTRADOR
Route::resource('admin', AdminController::class)->middleware(['auth']);


#ROTA QUE LISTA TODOS OS USUARIOS
Route::resource('usuario', UserController::class)->middleware(['auth']);


#ROTA MAPA ECOPONTOS
Route::get('/mapa_ecopontos', [EcopontoController::class, 'gmaps2'])->name('mapa_ecopontos');


#ROTA ECOPONTOS
Route::resource('ecoponto', EcopontoController::class);


//PRECISA AUTENTICAR NO SISTEMA E SER ADMIN
//Route::resource('usuario', UserController::class)->middleware(['auth','admin']);
//Route::resource('usuario', UserController::class)->middleware(['auth']);
//Route::resource('ecoponto', EcopontoController::class)->middleware(['auth']);
//Route::resource('administrador', AdministradorController::class)->middleware(['auth']);













#Route::resource('ecoponto', EcopontoController::class);#->middleware(['auth']);
#Route::get('/ecoponto', [HomeController::class, 'index']);


Route::get('/teste', function () {
    return view('admin.partials_crud.teste');
})->name('teste');


/*Route::get('/teste', function () {
    return view('gmaps');
})->name('teste');*/