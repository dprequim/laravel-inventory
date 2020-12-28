<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PurchaseRequest;
use Carbon\Carbon;

class PrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('purchaserequest.index', [
            'purchaserequest' => PurchaseRequest::paginate(15), 
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
        return view('purchaserequest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PurchaseRequest $purchaserequest)
    {
        $purchaserequest->create($request->all());

        return redirect()
            ->route('purchaserequest.index')
            ->withStatus('Purchase Request successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseRequest $purchase_request)
    {
        return view('purchaserequest.show', [
            'purchaserequest' => $purchase_request
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchaseRequest $purchase_request)
    {
        return view('purchaserequest.edit', compact('purchaserequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PurchaseRequest $purchase_request)
    {
        $purchase_request->update($request->all());

        return redirect()
            ->route('purchaserequest.index')
            ->withStatus('Purchase Request updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseRequest $purchaserequest)
    {
        $purchaserequest->delete();
        
        return back()->withStatus('Purchase Request successfully removed.');
    }
}
