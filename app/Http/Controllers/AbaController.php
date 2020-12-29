<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BidsAndAwards;
use Carbon\Carbon;

class AbaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('aba.index', [
            'aba' => BidsAndAwards::paginate(15), 
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
        return view('aba.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, BidsAndAwards $aba)
    {
        $aba->create($request->all());

        return redirect()
            ->route('aba.index')
            ->withStatus('Apr successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BidsAndAwards $aba)
    {
        return view('aba.show', [
            'aba' => $aba
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BidsAndAwards $aba)
    {
        return view('aba.edit', compact('aba'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BidsAndAwards $aba)
    {
        $aba->update($request->all());

        return redirect()
            ->route('aba.index')
            ->withStatus('Bids And Awards updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BidsAndAwards $aba)
    {
        $aba->delete();
        
        return back()->withStatus('BidsAndAwards successfully removed.');
    }
}
