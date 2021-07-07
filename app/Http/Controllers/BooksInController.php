<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BooksIn;
use App\Book;
use Carbon\Carbon;

class BooksInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $books_in = BooksIn::query()
        ->whereHas('Book', function($q) use($request){
            $q->where('name', 'like', "%{$request->search}%");
        })->with('Book')->paginate(15);

        return view('books_in.index', compact('books_in'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all(['id', 'name']);
        return view('books_in.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, BooksIn $books_in)
    {
        $books_in->create($request->all());
        $books = Book::where('id',$request->book_id)->first();
        $books->quantity = intval($books->quantity) + intval($request->quantity);
        $books->save();
        return redirect()
            ->route('books_in.index')
            ->withStatus('Stock-in successfully.');
    }
}
