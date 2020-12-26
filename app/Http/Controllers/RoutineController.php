<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoutineSlip;
use Carbon\Carbon;

class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('routines.index', [
            'routine' => RoutineSlip::paginate(15), 
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
        return view('routines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RoutineSlip $routine)
    {
        $routine->create($request->all());

        return redirect()
            ->route('routines.index')
            ->withStatus('Routine Slip successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RoutineSlip $routine)
    {
        return view('routines.show', [
            'routine' => $routine
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RoutineSlip $routine)
    {
        return view('routines.edit', compact('routine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoutineSlip $routine)
    {
        $routine->update($request->all());

        return redirect()
            ->route('routines.index')
            ->withStatus('Routine Slip updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoutineSlip $routine)
    {
        $routine->delete();
        
        return back()->withStatus('Routine Slip successfully removed.');
    }
}
