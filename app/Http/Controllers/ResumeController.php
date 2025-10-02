<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Shared\Html;
use Spatie\LaravelPdf\Facades\Pdf;
use Illuminate\Support\Facades\View;

class ResumeController extends Controller
{

    public function index()
    {
        $resume = Resume::with('user', 'experiences', 'skills', 'educations', 'languages', 'others')->where('user_id', auth()->user()->id)->first();

        return view($resume->template, compact('resume'));
    }

    public function preview()
    {
        $resume = Resume::with('user', 'experiences', 'skills', 'educations', 'languages', 'others')->where('user_id', auth()->user()->id)->first();

        return Pdf::view($resume->template, compact('resume'));
    }

    public function download()
    {
        $resume = Resume::with('user', 'experiences', 'skills', 'educations', 'languages', 'others')->where('user_id', auth()->user()->id)->first();

        return Pdf::download($resume->template, compact('resume'));
    }
}
