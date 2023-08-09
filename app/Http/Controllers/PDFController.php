<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function showPDF()
    {
        $pdfPath = public_path('PDF/Spd_2023-08-04.pdf');

        return view('popup.pdf', ['pdfPath' => $pdfPath]);
    }
}
