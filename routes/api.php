<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShareEverythingController;

Route::get('/test', [ShareEverythingController::class, 'index']);
Route::post('/shares', [ShareEverythingController::class, 'store']);
Route::get('/shares/{slug}', [ShareEverythingController::class, 'show']);

Route::post('/update-content', [ShareEverythingController::class, 'updateContent']);
