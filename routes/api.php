<?php

use App\Models\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/models', function () {
    $maker_id = request('maker_id');
    return Models::where('maker_id', $maker_id)->get();
});
