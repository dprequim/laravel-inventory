<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ParSupply;
use Carbon\Carbon;

class ParController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('par.index', [
            'par' => ParSupply::paginate(15), 
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
        return view('par.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Parsupply $par)
    {
        $par->create($request->all());

        return redirect()
            ->route('par.index')
            ->withStatus('PROPERTY ACKNOWLEDGMENT RECEIPT successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ParSupply $par)
    {
        return view('par.show', [
            'par' => $par
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ParSupply $par)
    {
        return view('par.edit', compact('par'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParSupply $par)
    {
        $par->update($request->all());

        return redirect()
            ->route('par.index')
            ->withStatus('PROPERTY ACKNOWLEDGMENT RECEIPT updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParSupply $par)
    {
        $par->delete();
        
        return back()->withStatus('PROPERTY ACKNOWLEDGMENT RECEIPT successfully removed.');
    }
}
