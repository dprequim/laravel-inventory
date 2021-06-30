<?php

namespace App\Http\Controllers;
use App\InventoryChecklistOne;
use Illuminate\Http\Request;
// use Carbon\Carbon;

class InventoryChecklistOneController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('checklistone.index', [
            'checklistone' => InventoryChecklistOne::query()
            ->where('item', 'like', "%{$request->search}%")
            ->orWhere('property_no', 'like', "%{$request->search}%")->paginate(15), 
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
        return view('checklistone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, InventoryChecklistOne $checklistone)
    {
        $checklistone->create($request->all());

        return redirect()
            ->route('checklistone.index')
            ->withStatus('Inventory Checklist successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(InventoryChecklistOne $checklistone)
    {
        return view('checklistone.show', [
            'checklistone' => $checklistone
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InventoryChecklistOne $checklistone)
    {
        return view('checklistone.edit', compact('checklistone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventoryChecklistOne $checklistone)
    {
        $checklistone->update($request->all());

        return redirect()
            ->route('checklistone.index')
            ->withStatus('Inventory Checklist updated satisfactorily.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InventoryChecklistOne $checklistone)
    {
        $checklistone->delete();
        
        return back()->withStatus('Inventory Checklist successfully removed.');
    }
}
