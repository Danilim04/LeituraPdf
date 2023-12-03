<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;


class LeituraPdfController extends Controller
{
    public function LeituraPDf(Request $request)
    {
        $pdf = $request->file('pdf');
        $text = (new Pdf)->setPdf($pdf)->text();
        dd($text);
    }
}
