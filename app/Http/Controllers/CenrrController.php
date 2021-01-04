<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CertificationOfExpenses;
use Carbon\Carbon;

class CenrrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('cenrr.index', [
            'cenrr' => CertificationOfExpenses::paginate(15), 
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
        return view('cenrr.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CertificationOfExpenses $cenrr)
    {
        $cenrr->create($request->all());

        return redirect()
            ->route('cenrr.index')
            ->withStatus('Certification Of Expenses successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CertificationOfExpenses $cenrr)
    {
        return view('cenrr.show', [
            'cenrr' => $cenrr
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificationOfExpenses $cenrr)
    {
        return view('cenrr.edit', compact('cenrr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CertificationOfExpenses $cenrr)
    {
        $cenrr->update($request->all());

        return redirect()
            ->route('cenrr.index')
            ->withStatus('Certification Of Expenses updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificationOfExpenses $cenrr)
    {
        $cenrr->delete();
        
        return back()->withStatus('Certification Of Expenses successfully removed.');
    }
}
