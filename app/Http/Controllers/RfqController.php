<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RequestForQuotation;
use Carbon\Carbon;

class RfqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('rfq.index', [
            'rfq' => RequestForQuotation::paginate(15), 
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
        return view('rfq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RequestForQuotation $rfq)
    {
        $rfq->create($request->all());

        return redirect()
            ->route('rfq.index')
            ->withStatus('Request For Quotation successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RequestForQuotation $rfq)
    {
        return view('rfq.show', [
            'rfq' => $rfq
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestForQuotation $rfq)
    {
        return view('rfq.edit', compact('rfq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestForQuotation $rfq)
    {
        $rfq->update($request->all());

        return redirect()
            ->route('rfq.index')
            ->withStatus('Request For Quotation updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestForQuotation $rfq)
    {
        $rfq->delete();
        
        return back()->withStatus('Request For Quotation successfully removed.');
    }
}
