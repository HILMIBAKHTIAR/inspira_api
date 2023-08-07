<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('playersget', [PlayerController::class, 'index']);
Route::post('playerspost', [PlayerController::class, 'store']);
Route::delete('playersdel', [PlayerController::class, 'destroy']);
Route::put('playersput', [PlayerController::class, 'update']);
