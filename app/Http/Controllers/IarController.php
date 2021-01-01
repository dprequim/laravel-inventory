<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InspectionReport;
use Carbon\Carbon;

class IarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('iar.index', [
            'iar' => InspectionReport::paginate(15), 
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
        return view('iar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, InspectionReport $iar)
    {
        $iar->create($request->all());

        return redirect()
            ->route('iar.index')
            ->withStatus('INSPECTION AND ACCEPTANCE REPORT successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(InspectionReport $iar)
    {
        return view('iar.show', [
            'iar' => $iar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InspectionReport $iar)
    {
        return view('iar.edit', compact('iar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InspectionReport $iar)
    {
        $iar->update($request->all());

        return redirect()
            ->route('iar.index')
            ->withStatus('INSPECTION AND ACCEPTANCE REPORT updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InspectionReport $iar)
    {
        $iar->delete();
        
        return back()->withStatus('INSPECTION AND ACCEPTANCE REPORT successfully removed.');
    }
}
