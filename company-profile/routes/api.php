<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BengkelApiController;
use App\Http\Controllers\Api\LayananApiController;
use App\Http\Controllers\Api\PelangganApiController;

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
Route::post('/login', [AuthController::class, 'login']);


/*
|--------------------------------------------------------------------------
| PUBLIC (boleh diakses tanpa login)
|--------------------------------------------------------------------------
*/
Route::get('/bengkel', [BengkelApiController::class, 'index']);
Route::get('/bengkel/{id}', [BengkelApiController::class, 'show']);

Route::get('/layanan', [LayananApiController::class, 'index']);
Route::get('/layanan/{id}', [LayananApiController::class, 'show']);

Route::get('/pelanggan', [PelangganApiController::class, 'index']);
Route::get('/pelanggan/{id}', [PelangganApiController::class, 'show']);


/*
|--------------------------------------------------------------------------
| PROTECTED (butuh token)
|--------------------------------------------------------------------------
*/
Route::middleware('auth:sanctum')->group(function () {

    // USER
    Route::get('/user', function (Request $request) {
        return response()->json([
            'success' => true,
            'data' => $request->user()
        ]);
    });

    /*
    |--------------------------------------------------------------------------
    | BENGKEL
    |--------------------------------------------------------------------------
    */
    Route::post('/bengkel', [BengkelApiController::class, 'store']);
    Route::put('/bengkel/{id}', [BengkelApiController::class, 'update']);
    Route::delete('/bengkel/{id}', [BengkelApiController::class, 'destroy']);

    /*
    |--------------------------------------------------------------------------
    | LAYANAN
    |--------------------------------------------------------------------------
    */
    Route::post('/layanan', [LayananApiController::class, 'store']);
    Route::put('/layanan/{id}', [LayananApiController::class, 'update']);
    Route::delete('/layanan/{id}', [LayananApiController::class, 'destroy']);

    /*
    |--------------------------------------------------------------------------
    | PELANGGAN
    |--------------------------------------------------------------------------
    */
    Route::post('/pelanggan', [PelangganApiController::class, 'store']);
    Route::put('/pelanggan/{id}', [PelangganApiController::class, 'update']);
    Route::delete('/pelanggan/{id}', [PelangganApiController::class, 'destroy']);
});