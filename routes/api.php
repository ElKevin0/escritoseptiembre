<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/user',[UserController::class,"Register"]);
Route::post('/editar', [UserController::class, 'Editar']);
Route::get('/usuario/{id}', [UserController::class, 'BuscarParaEditar']);
Route::get('/personas', [UserController::class, 'index']);