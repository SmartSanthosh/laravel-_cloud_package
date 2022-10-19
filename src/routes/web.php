<?php

use Illuminate\Support\Facades\Route;
use ProcessDrive\LaravelCloudTranslation\Controllers\TransController;

Route::get('translation/index', [TransController::class, 'index'])->name('translation.index');
Route::get('translation/get-data', [TransController::class, 'getTranslation'])->name('translation.getdata');
Route::post('translation/get-data', [TransController::class, 'getTranslation'])->name('translation.getdata');