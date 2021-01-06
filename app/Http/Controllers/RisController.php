<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RequisitionSlip;
use Carbon\Carbon;

class RisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ris.index', [
            'ri' => RequisitionSlip::paginate(15), 
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
        return view('ris.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RequisitionSlip $ri)
    {
        $ri->create($request->all());

        return redirect()
            ->route('ris.index')
            ->withStatus('Requisition Slip successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RequisitionSlip $ri)
    {
        return view('ris.show', [
            'ris' => $ri
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RequisitionSlip $ri)
    {
        return view('ris.edit', compact('ri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequisitionSlip $ri)
    {
        $ri->update($request->all());

        return redirect()
            ->route('ris.index')
            ->withStatus('Requisition Slip updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequisitionSlip $ri)
    {
        $ri->delete();
        
        return back()->withStatus('Requisition Slip successfully removed.');
    }
}
