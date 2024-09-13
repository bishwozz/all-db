<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShareController;

Route::post('/shares', [ShareEverythingController::class, 'store']);
Route::get('/shares/{slug}', [ShareEverythingController::class, 'show']);
