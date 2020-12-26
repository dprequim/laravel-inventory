<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tin;
use Carbon\Carbon;

class TinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tin.index', [
            'tin' => Tin::paginate(15), 
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
        return view('tin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tin $tin)
    {
        $tin->create($request->all());

        return redirect()
            ->route('tin.index')
            ->withStatus('TIN successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tin $tin)
    {
        return view('tin.show', [
            'tin' => $tin
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tin $tin)
    {
        return view('tin.edit', compact('tin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tin $tin)
    {
        $tin->update($request->all());

        return redirect()
            ->route('tin.index')
            ->withStatus('TIN updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tin $tin)
    {
        $tin->delete();
        
        return back()->withStatus('TIN successfully removed.');
    }
}
