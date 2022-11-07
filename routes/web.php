<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\registroController;

Route::get('/', function () {
    return view('auth.tpsLogin');
})->middleware('guest');

/*Route::get('/gestionUsuario', function () {
    return view('gestionUsuario');
});*/ 

Route::get('/gestionestacionamiento', function(){
    return view('gestionestacionamiento');
});

Route::get('/reportes', function(){
    return view('reportes');
})->middleware('auth');

Route::get('/index', function(){
    return view('index');
})->middleware('auth');

Route::get('/', [SessionController::class, 'create'])->middleware('guest')->name('tpsLogin.index');
Route::post('/', [SessionController::class, 'store'])->name('tpsLogin.store');

Route::get('/gestionUsuario', [RegisterController::class, 'create'])
->middleware('auth.admin')->name('gestionUsuario.index');
Route::post('/gestionUsuario', [RegisterController::class, 'store'])->name('gestionUsuario.store');

Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth')
    ->name('tpsLogin.destroy');

Route::get('/admin',[Admincontroller::class, 'index'])->middleware('auth.admin')->name('admin.index');

//listar
Route::get('/gestionUsuario', [RegisterController::class, 'index'])
->middleware('auth.admin')->name('gestionUsuario.index');
Route::get('/gestionUsuario/{id}',[RegisterController::class, 'show'])->name('gestionUsuario-edit');
Route::patch('/gestionUsuario/{id}',[RegisterController::class, 'update'])->name('gestionUsuario-update');
Route::delete('/gestionUsuario/{id}',[RegisterController::class, 'destroy'])->name('gestionUsuario-destroy');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::get('/gestionestacionamientovaras', [registroController::class, 'create'])->name('gestionestacionamientovaras.index');

Route::post('/gestionestacionamientovaras',[registroController::class, 'store'])->name('gestionestacionamientovaras.store');
