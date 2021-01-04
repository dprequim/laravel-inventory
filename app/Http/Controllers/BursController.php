<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UtilizationRequest;
use Carbon\Carbon;

class BursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('burs.index', [
            'bur' => UtilizationRequest::paginate(15), 
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
        return view('burs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, UtilizationRequest $bur)
    {
        $bur->create($request->all());

        return redirect()
            ->route('burs.index')
            ->withStatus('Utilization Request successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(UtilizationRequest $bur)
    {
        return view('burs.show', [
            'burs' => $bur
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(UtilizationRequest $bur)
    {
        return view('burs.edit', compact('bur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UtilizationRequest $bur)
    {
        $bur->update($request->all());

        return redirect()
            ->route('burs.index')
            ->withStatus('Utilization Request updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UtilizationRequest $bur)
    {
        $bur->delete();
        
        return back()->withStatus('Utilization Request successfully removed.');
    }
}
