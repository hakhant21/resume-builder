<?php

use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ResumeController::class, 'index'])->name('resume.index');

Route::get('/word', [ResumeController::class, 'word'])->name('resume.word');

Route::get('/preview', [ResumeController::class, 'preview'])->name('resume.preview');

Route::get('/download', [ResumeController::class, 'download'])->name('resume.download');
