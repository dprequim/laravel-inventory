<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\APR;
use Carbon\Carbon;

class AprController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('apr.index', [
            'aprs' => APR::paginate(15), 
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
        return view('apr.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, APR $aprs)
    {
        $aprs->create($request->all());

        return redirect()
            ->route('apr.index')
            ->withStatus('APR successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(APR $aprs)
    {
        return view('apr.show', [
            'aprs' => $aprs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(APR $aprs)
    {
        return view('apr.edit', compact('aprs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, APR $aprs)
    {
        $aprs->update($request->all());

        return redirect()
            ->route('apr.index')
            ->withStatus('APR updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(APR $aprs)
    {
        $aprs->delete();
        
        return back()->withStatus('APR successfully removed.');
    }
}
