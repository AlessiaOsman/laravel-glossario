<?php

use App\Http\Controllers\Api\FilterController;
use App\Http\Controllers\Api\GlossarioController;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('words', GlossarioController::class)->only('index');
Route::get('words/{slug}', [GlossarioController::class, 'show']);