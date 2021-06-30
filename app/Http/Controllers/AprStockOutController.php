<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AprStockOut;
use App\Apr;
use Carbon\Carbon;

class AprStockOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        return view('apr_out.index', [
            'apr_out' => AprStockOut::query()
            ->where('department', 'like', "%{$request->search}%")
            ->orwhereHas('Apr', function($q) use($request){
                $q->where('item_no', 'like', "%{$request->search}%");
            })->with('Apr')->paginate(15), 
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
        return view('apr_out.create', compact('apr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, AprStockOut $apr_out)
    {
        $apr_out->create($request->all());
        $apr = Apr::where('id',$request->apr_id)->first();
        $apr->quantity = intval($apr->quantity) - intval($request->stock_out);
        $apr->save();
        return redirect()
            ->route('apr_out.index')
            ->withStatus('Apr Stock-out successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(AprStockOut $apr_out)
    // {
    //     return view('apr_out.show', [
    //         'apr_out' => $apr_out
    //     ]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(AprStockOut $apr_out)
    // {
    //     return view('apr_out.edit', compact('apr_out'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, AprStockOut $apr_out)
    // {
    //     $apr_out->update($request->all());

    //     return redirect()
    //         ->route('apr_out.index')
    //         ->withStatus('Apr Stock-out updated satisfactorily.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(AprStockOut $apr_out)
    // {
    //     $apr_out->delete();
        
    //     return back()->withStatus('Apr Stock-out successfully removed.');
    // }
}
