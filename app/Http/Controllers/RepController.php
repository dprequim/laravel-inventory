<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RepairInspection;
use Carbon\Carbon;

class RepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('rep.index', [
            'rep' => RepairInspection::paginate(15), 
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
        return view('rep.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RepairInspection $rep)
    {
        $rep->create($request->all());

        return redirect()
            ->route('rep.index')
            ->withStatus('Transfer Report successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RepairInspection $rep)
    {
        return view('rep.show', [
            'rep' => $rep
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RepairInspection $rep)
    {
        return view('rep.edit', compact('rep'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RepairInspection $rep)
    {
        $rep->update($request->all());

        return redirect()
            ->route('rep.index')
            ->withStatus('Transfer Report updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RepairInspection $rep)
    {
        $rep->delete();
        
        return back()->withStatus('Transfer Report successfully removed.');
    }
}
 
