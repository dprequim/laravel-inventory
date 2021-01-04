<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DisbursementVoucher;
use Carbon\Carbon;

class DvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('dv.index', [
            'dv' => DisbursementVoucher::paginate(15), 
            'month' => Carbon::now()->month
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, DisbursementVoucher $dv)
    {
        $dv->create($request->all());

        return redirect()
            ->route('dv.index')
            ->withStatus('Disbursement Voucher successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DisbursementVoucher $dv)
    {
        return view('dv.show', [
            'dv' => $dv
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DisbursementVoucher $dv)
    {
        return view('dv.edit', compact('dv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DisbursementVoucher $dv)
    {
        $dv->update($request->all());

        return redirect()
            ->route('dv.index')
            ->withStatus('Disbursement Voucher updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DisbursementVoucher $dv)
    {
        $dv->delete();
        
        return back()->withStatus('Disbursement Voucher successfully removed.');
    }
}
