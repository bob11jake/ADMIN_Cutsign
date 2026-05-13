<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// 1. Aquí "importamos" tus controladores para que Laravel sepa dónde están
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\NodoController;
use App\Http\Controllers\ProgresoController;

// 2. Creamos las rutas automáticas del CRUD para cada tabla
Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('temas', TemaController::class);
Route::apiResource('contenidos', ContenidoController::class);
Route::apiResource('nodos', NodoController::class);
Route::apiResource('progresos', ProgresoController::class);