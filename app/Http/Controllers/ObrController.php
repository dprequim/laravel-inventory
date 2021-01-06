<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ObligationStatus;
use Carbon\Carbon;

class ObrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('obr.index', [
            'obr' => ObligationStatus::paginate(15), 
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
        return view('obr.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ObligationStatus $obr)
    {
        $obr->create($request->all());

        return redirect()
            ->route('obr.index')
            ->withStatus('Obligation Status successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ObligationStatus $obr)
    {
        return view('obr.show', [
            'obr' => $obr
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ObligationStatus $obr)
    {
        return view('obr.edit', compact('obr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ObligationStatus $obr)
    {
        $obr->update($request->all());

        return redirect()
            ->route('obr.index')
            ->withStatus('Obligation Status updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ObligationStatus $obr)
    {
        $obr->delete();
        
        return back()->withStatus('Obligation Status successfully removed.');
    }
}
