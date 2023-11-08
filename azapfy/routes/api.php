<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;

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

Route::get('/av1/group', [NotaController::class, 'groupTotal']);
Route::get('/av1/total-value-nota', [NotaController::class, 'totalValueNota']);
Route::get('/av1/total-value-nota/proven', [NotaController::class, 'totalValueNotaProven']);
Route::get('/av1/total-value-nota/open', [NotaController::class, 'totalValueNotaOpen']);
Route::get('/av1/total-value-nota/lost', [NotaController::class, 'totalValueNotaLost']);
