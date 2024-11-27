<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf', function(){
    $pdf = Pdf::loadView('resume');

    return $pdf->stream('resume.pdf');
});
