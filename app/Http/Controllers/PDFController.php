<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        // Create a new Dompdf instance
        $pdf = new Dompdf();

        // Load HTML content into Dompdf
        $html = '<h1>Hello, PDF!</h1>';
        $pdf->loadHtml($html);

        // Set paper size and orientation
        $pdf->setPaper('A4', 'portrait');

        // Render PDF (generate output)
        $pdf->render();

        // Output PDF to browser
        return $pdf->stream('document.pdf');
    }
}
