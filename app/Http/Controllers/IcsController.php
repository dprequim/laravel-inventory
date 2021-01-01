<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustodianSlipSupply;
use Carbon\Carbon;

class IcsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ics.index', [
            'ics' => CustodianSlipSupply::paginate(15), 
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
        return view('ics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CustodianSlipSupply $ic)
    {
        $ic->create($request->all());

        return redirect()
            ->route('ics.index')
            ->withStatus('Custodian Slip Supply successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tin $ic)
    {
        return view('ics.show', [
            'ics' => $ic
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CustodianSlipSupply $ic)
    {
        return view('ics.edit', compact('ic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustodianSlipSupply $ic)
    {
        $ic->update($request->all());

        return redirect()
            ->route('ics.index')
            ->withStatus('Custodian Slip Supply updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustodianSlipSupply $ic)
    {
        $ic->delete();
        
        return back()->withStatus('Custodian Slip Supply successfully removed.');
    }
}
