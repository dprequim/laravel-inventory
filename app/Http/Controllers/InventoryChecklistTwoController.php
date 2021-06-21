<?php

namespace App\Http\Controllers;
use App\InventoryChecklistTwo;
use Illuminate\Http\Request;
// use Carbon\Carbon;

class InventoryChecklistTwoController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('checklisttwo.index', [
            'checklisttwo' => InventoryChecklistTwo::query()
            ->where('item', 'LIKE', "%{$request->search}%")
            ->orWhere('property_no', 'LIKE', "%{$request->search}%")->paginate(15), 
            // 'month' => Carbon::now()->month
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('checklisttwo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, InventoryChecklistTwo $checklisttwo)
    {
        $checklisttwo->create($request->all());

        return redirect()
            ->route('checklisttwo.index')
            ->withStatus('Inventory Checklist successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(InventoryChecklistTwo $checklisttwo)
    {
        return view('checklisttwo.show', [
            'checklisttwo' => $checklisttwo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InventoryChecklistTwo $checklisttwo)
    {
        return view('checklisttwo.edit', compact('checklisttwo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventoryChecklistTwo $checklisttwo)
    {
        $checklisttwo->update($request->all());

        return redirect()
            ->route('checklisttwo.index')
            ->withStatus('Inventory Checklist updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InventoryChecklistTwo $checklisttwo)
    {
        $checklisttwo->delete();
        
        return back()->withStatus('Inventory Checklist successfully removed.');
    }
}
