<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventosController;
use App\Http\Controllers\UsuariosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get( '/evento/listar',[EventosController::class,'listado' ]);

Route::get( '/evento/detalle/{id}',[EventosController::class,'detalle' ]);

Route::post( '/evento/registrar',[EventosController::class,'registrar' ]);
Route::put( '/evento/actualizar/{id}',[EventosController::class,'actualizar' ]);
Route::get( '/evento/eliminar/{id}',[EventosController::class,'eliminar' ]);

Route::get( '/usuario/listar',[UsuariosController::class,'listado' ]);
Route::post( '/usuario/registrar',[UsuariosController::class,'registrar' ]);
Route::put( '/usuario/actualizar/{id}',[UsuariosController::class,'actualizar' ]);
Route::get( '/usuario/eliminar/{id}',[UsuariosController::class,'eliminar' ]);
Route::post( '/usuario/login',[UsuariosController::class,'login' ]);
