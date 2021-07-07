@extends('layouts.app', ['page' => 'books', 'pageSlug' => 'books', 'section' => 'books'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>Books Lists</strong></h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('books.create') }}" class="btn btn-sm btn-primary">Add Book</a>
                            <a href="{{ 'api/books/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">NAME</th>
                                <th scope="col">QUANTITY</th>
                                <th scope="col">DATE UPDATED</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->name??'' }}</td>
                                        <td>{{ $book->quantity??'' }}</td>
                                        <td>{{ $book->updated_at??'' }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('books.edit', $book) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Book">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('books.destroy', $book) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Delete Book" onclick="confirm('Are you sure you want to remove this method? The payment records will not be deleted.') ? this.parentElement.submit() : ''">
                                                    <i class="tim-icons icon-simple-remove"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
               </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                       {{ $books->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
