<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\EstudioController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\ProfesorAsignaturaController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::ApiResource('/asignatura', AsignaturaController::class);
Route::ApiResource('/estudio', EstudioController::class);
Route::ApiResource('/profesor', ProfesorController::class);
Route::ApiResource('/profesor-asignatura', ProfesorAsignaturaController::class);