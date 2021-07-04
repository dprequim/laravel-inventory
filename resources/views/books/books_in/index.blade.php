@extends('layouts.app', ['page' => 'books_in', 'pageSlug' => 'books_in', 'section' => 'books_in'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>Stock-in</strong></h4>
                            <form action="{{ route('books_in.index') }}" method="GET">
                                <input class="pl-lg-4" type="text" name="search" placeholder="Search Name" required/>
                                <button type="submit" class="btn btn-sm btn-secondary">Search</button>
                                <a href="{{ route('books_in.index') }}" class="btn btn-sm btn-secondary">Refresh</a>
                            </form>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('books_in.create') }}" class="btn btn-sm btn-primary">Stock-in</a>
                            <!-- <a href="{{ 'api/books_in/pdf' }}" class="btn btn-sm btn-primary">Print</a> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">BOOK NAME</th>
                                <th scope="col">QUANTITY</th>
                            </thead>
                            <tbody>
                                @foreach ($books_in as $item)
                                    <tr>
                                        <td>{{ $item->Book->name??'' }}</td>
                                        <td>{{ $item->quantity??'' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
               </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                       {{ $books_in->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
