<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PDFController extends Controller
{
    public function generatePDF($data)
    {
        // Create a new Dompdf instance
        $pdf = new Dompdf();

        $dataArray = [];
        parse_str($data, $dataArray);

        $name = $dataArray['name'] ?? null;
        $desc = $dataArray['desc'] ?? null;
        $stats = $dataArray['stats'] ?? null;
        $feed = $dataArray['feed'] ?? null;

        // Load HTML content into Dompdf
        $html = '<h1>'. $name . ' ' . $desc . ' ' . $stats . ' ' . $feed . ' ' . '</h1>';
        $pdf->loadHtml($html);

        // Set paper size and orientation
        $pdf->setPaper('A4', 'portrait');

        // Render PDF (generate output)
        $pdf->render();

        // Output PDF to browser
        return $pdf->stream('document.pdf');
    }
}
