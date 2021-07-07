@extends('layouts.app', ['page' => 'books_out', 'pageSlug' => 'books_out', 'section' => 'books_out'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>Books Stock-out</strong></h4>
                            <form action="{{ route('books_out.index') }}" method="GET">
                                <input class="pl-lg-4" type="text" name="search" placeholder="Search Name" required/>
                                <button type="submit" class="btn btn-sm btn-secondary">Search</button>
                                <a href="{{ route('books_out.index') }}" class="btn btn-sm btn-secondary">Refresh</a>
                            </form>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('books_out.create') }}" class="btn btn-sm btn-primary">Stock-out</a>
                            <!-- <a href="{{ 'api/apr_in/pdf' }}" class="btn btn-sm btn-primary">Print</a> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">BOOK NAME</th>
                                <th scope="col">QUANTITY</th>
                                <th scope="col">STOCK-OUT DATE</th>
                            </thead>
                            <tbody>
                                @foreach ($books_out as $item)
                                    <tr>
                                        <td>{{ $item->Book->name??'' }}</td>
                                        <td>{{ $item->quantity??'' }}</td>
                                        <td>{{ $item->created_at??'' }}</td>
                                        <td class="td-actions text-right">
                                            <!-- <a href="{{ route('apr_in.edit', $item) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a> -->
                                            <!-- <form action="{{ route('apr.destroy', $item) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Delete Item" onclick="confirm('Are you sure you want to remove this method? The payment records will not be deleted.') ? this.parentElement.submit() : ''">
                                                    <i class="tim-icons icon-simple-remove"></i>
                                                </button>
                                            </form> -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
               </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                       {{ $books_out->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
