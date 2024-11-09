<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ParentescoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\FormularioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TwoFactorController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', PostController::class);
Route::resource('parentescos', ParentescoController::class);
Route::resource('alumnos', AlumnoController::class);
Route::resource('encargados', EncargadoController::class);

Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'loginAction']);
Route::get('/login-2fa', [AuthController::class,'login2fa'])->name('2fa');
Route::post('/login-2fa', [AuthController::class, 'verify'])->name('2fa.verify');

Route::get('/logout', [AuthController::class,'index'])->name('logout');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::post('/enable-2fa', [TwoFactorController::class,'enable2Fa'])->name('enable-2fa');
    Route::post('/verify-2fa', [TwoFactorController::class,'verify2Fa'])->name('verify-2fa');
});






Route::get('formulario-combinado', [FormularioController::class, 'create'])->name('formulario.create');
Route::post('formulario-combinado', [FormularioController::class, 'store'])->name('formulario.store');



