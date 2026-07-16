<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerProduto;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/criar', [ControllerProduto::class, 'create']);

Route::post('/criar', [ControllerProduto::class, 'store']);

Route::get('/catalogo', [ControllerProduto::class, 'index']);

Route::get('/adm', [ControllerProduto::class, 'dashboard']);

Route::get('/editar/{id}', [ControllerProduto::class, 'edit']);
Route::delete('/views/{id}', [ControllerProduto::class, 'destroy']);
Route::put('/update/{id}', [ControllerProduto::class, 'update']);