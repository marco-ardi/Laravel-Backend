<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicosController;
use App\Http\Controllers\VaccinosController;
use App\Http\Controllers\PazientesController;

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
    return view('welcome');
});

Route::get('/medicos', [MedicosController::class, 'index']);
Route::get('/vaccinos', [VaccinosController::class, 'index']);
Route::get('/pazientes', [PazientesController::class, 'index']);

Route::get('/medicos/create', [MedicosController::class, 'create']);
Route::get('/vaccinos/create', [VaccinosController::class, 'create']);
Route::get('/pazientes/create', [PazientesController::class, 'create']);

Route::put('/medicos', [MedicosController::class, 'store']);
Route::post('/vaccinos', [VaccinosController::class, 'store']);
Route::post('/pazientes', [PazientesController::class, 'store']);

Route::get('/medicos/{medico}/edit', [MedicosController::class, 'edit']);
Route::get('/vaccinos/{vaccino}/edit', [VaccinosController::class, 'edit']);
Route::get('/pazientes/{paziente}/edit', [PazientesController::class, 'edit']);

Route::put('/medicos/{medico}',[MedicosController::class, 'update']);
Route::put('/vaccinos/{vaccino}', [VaccinosController::class, 'update']);
Route::put('/pazientes/{paziente}', [PazientesController::class, 'update']);

Route::delete('/medicos/{medico}', [MedicosController::class, 'destroy']);
Route::delete('/vaccinos/{vaccino}', [VaccinosController::class, 'destroy']);
Route::delete('/pazientes/{paziente}', [PazientesController::class, 'destroy']);
