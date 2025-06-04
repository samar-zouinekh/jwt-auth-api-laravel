<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExternalApiController;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('me', [AuthController::class, 'me']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('/external-users', [ExternalApiController::class, 'fetchUsers']);
});

Route::middleware(['auth:api', 'is.admin'])->get('/admin-data', function () {
    return response()->json(['data' => 'only admins see this']);
});

Route::post('/refresh', [AuthController::class, 'refresh']);
