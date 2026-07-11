<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerProduto;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/criar', [ControllerProduto::class, 'create']);

Route::post('/criar', [ControllerProduto::class, 'store']);

Route::get('/catalogo', [ControllerProduto::class, 'index']);