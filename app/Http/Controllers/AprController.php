<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apr;
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
            'apr' => Apr::paginate(15), 
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
    public function store(Request $request, Apr $apr)
    {
        $apr->create($request->all());

        return redirect()
            ->route('apr.index')
            ->withStatus('Apr successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Apr $apr)
    {
        return view('apr.show', [
            'apr' => $apr
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Apr $apr)
    {
        return view('apr.edit', compact('apr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apr $apr)
    {
        $apr->update($request->all());

        return redirect()
            ->route('apr.index')
            ->withStatus('Apr updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apr $apr)
    {
        $apr->delete();
        
        return back()->withStatus('Apr successfully removed.');
    }
}
