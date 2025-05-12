<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Section;
use App\Models\SectionItem;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ResumeController extends Controller
{
    public function preview()
    {
        $resume = Resume::with('sections')->first();

        $sectionItems = [];
        $resume->sections->each(function ($section) use (&$sectionItems) {
            $lists = SectionItem::where('section_id', $section->id)->get();
            $sectionItems[$section->type] = $lists;
        });

        $pdf = Pdf::loadView('resume', [
            'resume' => $resume,
            'sectionItems' => $sectionItems
        ]);

        return $pdf->stream("$resume->name.pdf");
    }

    public function download()
    {
        $resume = Resume::with('sections')->first();

        $sectionItems = [];
        $resume->sections->each(function ($section) use (&$sectionItems) {
            $lists = SectionItem::where('section_id', $section->id)->get();
            $sectionItems[$section->type] = $lists;
        });

        $pdf = Pdf::loadView('resume', [
            'resume' => $resume,
            'sectionItems' => $sectionItems
        ]);

        return $pdf->download("$resume->name.pdf");
    }
}
