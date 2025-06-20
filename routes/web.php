<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/hi', function () {
    return view('welcome');
});



Route::get('/info', function () {
    return response()->json([
        'getMessage' => request('id')
    ]);
});
Route::get('/hello', [WelcomeController::class, 'index']);

