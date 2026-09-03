<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ✅ ADD THIS HEALTH CHECK ROUTE
Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'service' => 'Gotera Church API',
        'version' => '1.0.0',
        'timestamp' => now()->toIso8601String(),
        'locale' => app()->getLocale()
    ]);
});

// ✅ ADD THIS PING ROUTE
Route::get('/ping', function () {
    return response()->json(['pong' => true]);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');