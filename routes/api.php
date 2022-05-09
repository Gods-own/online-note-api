<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\NoteController;
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

Route::middleware(['auth:sanctum'])->group(function() {

    Route::get('/folders', [FolderController::class, 'index']);

    Route::post('/folder', [FolderController::class, 'store']);

    Route::put('/folders/{folder}', [FolderController::class, 'update']);

    Route::get('/folders/{folder}/notes', [NoteController::class, 'index']);

    Route::post('/folders/{folder}/notes', [NoteController::class, 'store']);
});

Route::post('/register', [RegisterController::class, 'store']);

Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LogoutController::class, 'logout']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

