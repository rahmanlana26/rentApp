<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/xendit/callback', function (Request $request) {
    $data = $request->all();
    Log::info('Webhook Xendit Masuk: ', $data);

    if (isset($data['status']) && $data['status'] === 'PAID') {
        // Di sini nanti logika untuk update status lunas di database
    }
    return response()->json(['message' => 'Webhook diterima'], 200);
});
