<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {
       /** TODO:: Auth with sanctum */
});

Route::prefix('v1')->group(function() {
    /** TODO:: Auth with sanctum */
    Route::get('/weather', \App\Http\Controllers\API\V1\Weather\IndexController::class);
});
