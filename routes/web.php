<?php

use App\Http\Controllers\FjController\FjController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', [FjController::class, 'cliente']);