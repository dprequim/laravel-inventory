<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PurchasedOrder;
use Carbon\Carbon;

class PoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('porder.index', [
            'porder' => PurchasedOrder::paginate(15), 
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
        return view('porder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PurchasedOrder $porder)
    {
        $porder->create($request->all());

        return redirect()
            ->route('porder.index')
            ->withStatus('Purchased Order successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PurchasedOrder $porder)
    {
        return view('porder.show', [
            'porder' => $porder
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchasedOrder $porder)
    {
        return view('porder.edit', compact('porder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, porder $porder)
    {
        $porder->update($request->all());

        return redirect()
            ->route('porder.index')
            ->withStatus('Purchased Order updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchasedOrder $porder)
    {
        $porder->delete();
        
        return back()->withStatus('Purchased Order successfully removed.');
    }
}
