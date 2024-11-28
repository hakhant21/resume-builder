<?php

use App\Http\Controllers\ResumeController;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/resume/preview', [ResumeController::class, 'preview']);
Route::get('/resume/download', [ResumeController::class, 'download']);
