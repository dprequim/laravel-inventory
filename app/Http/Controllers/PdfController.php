<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Book;
use App\Tin;
use App\Apr;
use App\PurchaseRequest;
use App\PurchasedOrder;
use App\CustodianSlipSupply;
use App\ParSupply;
use App\MaterialReports;
use App\UtilizationRequest;
use App\CertificationOfExpenses;
use App\DisbursementVoucher;
use App\RequestForQuotation;
use App\RequisitionSlip;
use App\ObligationStatus;
use App\TransferReport;
use App\RepairInspection;
use App\inspectionReport;
use App\RoutineSlip;
use App\BidsAndAwards;
use App\InventoryChecklistOne;
use App\InventoryChecklistTwo;
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
    public function porderpdf()
    {   
        $data = PurchasedOrder::get();
        $pdf = PDF::loadView('pdfs.porder' , compact('data'));
        return $pdf->stream('Purchased Order.pdf');
    }
    public function wastepdf()
    {   
        $data = MaterialReports::get();
        $pdf = PDF::loadView('pdfs.waste' , compact('data'));
        return $pdf->stream('Waste Material Report.pdf');
    }
    public function burspdf()
    {   
        $data = UtilizationRequest::get();
        $pdf = PDF::loadView('pdfs.burs' , compact('data'));
        return $pdf->stream('Utilization Request.pdf');
    }
    public function cenrrpdf()
    {   
        $data = CertificationOfExpenses::get();
        // dd($data);
        $pdf = PDF::loadView('pdfs.cenrr' , compact('data'));
        return $pdf->stream('Certification Of Expenses.pdf');
    }
    public function dvpdf()
    {   
        $data = DisbursementVoucher::get();
        $pdf = PDF::loadView('pdfs.dv' , compact('data'));
        return $pdf->stream('Disbursement Voucher.pdf');
    }
    public function rfqpdf()
    {   
        $data = RequestForQuotation::get();
        $pdf = PDF::loadView('pdfs.rfq' , compact('data'));
        return $pdf->stream('Request For Quotation.pdf');
    }
    public function rispdf()
    {   
        $data = RequisitionSlip::get();
        $pdf = PDF::loadView('pdfs.ris' , compact('data'));
        return $pdf->stream('Requisition Slip.pdf');
    }
    public function obrpdf()
    {   
        $data = ObligationStatus::get();
        $pdf = PDF::loadView('pdfs.obr' , compact('data'));
        return $pdf->stream('OBLIGATION REQUEST AND STATUS.pdf');
    }
    public function ptrpdf()
    {   
        $data = TransferReport::get();
        $pdf = PDF::loadView('pdfs.ptr' , compact('data'));
        return $pdf->stream('Transfer Report.pdf');
    }
    public function reppdf()
    {   
        $data = RepairInspection::get();
        $pdf = PDF::loadView('pdfs.rep' , compact('data'));
        return $pdf->stream('Repair Inspection.pdf');
    }
    public function iarpdf()
    {   
        $data = inspectionReport::get();
        $pdf = PDF::loadView('pdfs.iar' , compact('data'));
        return $pdf->stream('INSPECTION AND ACCEPTANCE REPORT.pdf');
    }
    public function routepdf()
    {   
        $data = RoutineSlip::get();
        $pdf = PDF::loadView('pdfs.route' , compact('data'));
        return $pdf->stream('Routine Slip.pdf');
    }
    public function abspdf()
    {   
        $data = BidsAndAwards::get();
        $pdf = PDF::loadView('pdfs.abs' , compact('data'));
        return $pdf->stream('Bids And Awards.pdf');
    }
    public function checklistonepdf()
    {   
        $data = InventoryChecklistOne::get();
        $pdf = PDF::loadView('pdfs.checklistone' , compact('data'));
        return $pdf->stream('Inventory Checklist 1.pdf');
    }
    public function checklisttwopdf()
    {   
        $data = InventoryChecklistTwo::get();
        $pdf = PDF::loadView('pdfs.checklisttwo' , compact('data'));
        return $pdf->stream('Inventory Checklist 2.pdf');
    }

    public function bookspdf()
    {   
        $data = Book::get();
        $pdf = PDF::loadView('pdfs.books' , compact('data'));
        return $pdf->stream('Books.pdf');
    }
}
