<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BooksOut;
use App\Book;
use Carbon\Carbon;

class BooksOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $books_out =  BooksOut::query()
        ->whereHas('Book', function($q) use($request){
            $q->where('name', 'like', "%{$request->search}%");
        })->with('Book')->paginate(15);

        return view('books_out.index', compact('books_out')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all(['id', 'name']);
        return view('books_out.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, BooksOut $books_out)
    {
        $books_out->create($request->all());
        $book = Book::where('id',$request->book_id)->first();
        $book->quantity = intval($book->quantity) - intval($request->quantity);
        $book->save();
        return redirect()
            ->route('books_out.index')
            ->withStatus('Stock-out successfully.');
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
