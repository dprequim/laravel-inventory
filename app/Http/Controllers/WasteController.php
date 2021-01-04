<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaterialReports;
use Carbon\Carbon;

class WasteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('waste.index', [
            'waste' => MaterialReports::paginate(15), 
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
        return view('waste.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, MaterialReports $waste)
    {
        $waste->create($request->all());

        return redirect()
            ->route('waste.index')
            ->withStatus('waste successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialReports $waste)
    {
        return view('waste.show', [
            'waste' => $waste
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialReports $waste)
    {
        return view('waste.edit', compact('waste'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialReports $waste)
    {
        $waste->update($request->all());

        return redirect()
            ->route('waste.index')
            ->withStatus('Material Reports updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialReports $waste)
    {
        $waste->delete();
        
        return back()->withStatus('Reports successfully removed.');
    }
}
