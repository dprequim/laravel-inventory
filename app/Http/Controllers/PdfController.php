<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Tin;
class PdfController extends Controller
{
    public function tinpdf()
    {	
    	$data = Tin::get();
    	$pdf = PDF::loadView('pdfs.tin', compact('data'));
		return $pdf->stream('tin.pdf');
    }
    public function prpdf()
    {	
    	// $data = Tin::get();
    	$pdf = PDF::loadView('pdfs.pr');
		return $pdf->stream('Purchase Order.pdf');
    }
}
