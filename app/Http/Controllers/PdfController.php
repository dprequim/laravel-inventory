<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Tin;
use App\Apr;
use App\PurchaseRequest;
use App\CustodianSlipSupply;
use App\ParSupply;
use App\MaterialReports;
class PdfController extends Controller
{
    public function tinpdf()
    {	
    	$data = Tin::get();
    	$pdf = PDF::loadView('pdfs.tin', compact('data'));
		return $pdf->stream('tin.pdf');
    }
    public function icspdf()
    {	
    	$data = CustodianSlipSupply::get();
    	$pdf = PDF::loadView('pdfs.ics' , compact('data'));
		return $pdf->stream('ICS-Supply.pdf');
    }
    public function aprpdf()
    {   
        $data = Apr::get();
        $pdf = PDF::loadView('pdfs.apr' , compact('data'));
        return $pdf->stream('Agency Procurement Request.pdf');
    }
    public function prequestpdf()
    {   
        $data = PurchaseRequest::get();
        $pdf = PDF::loadView('pdfs.purchaserequest' , compact('data'));
        return $pdf->stream('Purchase Request.pdf');
    }
    public function parpdf()
    {   
        $data = ParSupply::get();
        $pdf = PDF::loadView('pdfs.par' , compact('data'));
        return $pdf->stream('Property Acknowledgement Receipt.pdf');
    }
    public function wastepdf()
    {   
        $data = MaterialReports::get();
        $pdf = PDF::loadView('pdfs.waste' , compact('data'));
        return $pdf->stream('Waste Material Report.pdf');
    }
}
