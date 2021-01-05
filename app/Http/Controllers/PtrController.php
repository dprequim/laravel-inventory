<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransferReport;
use Carbon\Carbon;

class PtrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('ptr.index', [
            'ptr' => TransferReport::paginate(15), 
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
        return view('ptr.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TransferReport $ptr)
    {
        $ptr->create($request->all());

        return redirect()
            ->route('ptr.index')
            ->withStatus('Transfer Report successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TransferReport $ptr)
    {
        return view('ptr.show', [
            'ptr' => $ptr
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TransferReport $ptr)
    {
        return view('ptr.edit', compact('ptr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransferReport $ptr)
    {
        $ptr->update($request->all());

        return redirect()
            ->route('ptr.index')
            ->withStatus('Transfer Report updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransferReport $ptr)
    {
        $ptr->delete();
        
        return back()->withStatus('Transfer Report successfully removed.');
    }
}
 