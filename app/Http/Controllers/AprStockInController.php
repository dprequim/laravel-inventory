<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AprStockIn;
use App\Apr;
use Carbon\Carbon;

class AprStockInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        return view('apr_in.index', [
            'apr_in' => AprStockIn::query()
            ->where('department', 'like', "%{$request->search}%")
            ->orwhereHas('Apr', function($q) use($request){
                $q->where('item_no', 'like', "%{$request->search}%");
            })
            ->with('Apr')->paginate(15), 
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
        $apr = Apr::all(['id', 'item_no']);
        return view('apr_in.create', compact('apr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, AprStockIn $apr_in)
    {
        $apr_in->create($request->all());
        $apr = Apr::where('id',$request->apr_id)->first();
        $apr->quantity = intval($apr->quantity) + intval($request->stock_in);
        $apr->save();
        return redirect()
            ->route('apr_in.index')
            ->withStatus('Apr Stock-in successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(AprStockIn $apr_in)
    // {
    //     return view('apr_in.show', [
    //         'apr_in' => $apr_in
    //     ]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(AprStockIn $apr_in)
    // {
    //     return view('apr_in.edit', compact('apr_in'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, AprStockIn $apr_in)
    // {
    //     $apr_in->update($request->all());

    //     return redirect()
    //         ->route('apr_in.index')
    //         ->withStatus('Apr Stock-in updated satisfactorily.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(AprStockIn $apr_in)
    // {
    //     $apr_in->delete();
        
    //     return back()->withStatus('Apr Stock-in successfully removed.');
    // }
}
