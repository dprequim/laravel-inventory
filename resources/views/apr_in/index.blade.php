@extends('layouts.app', ['page' => 'apr_in', 'pageSlug' => 'apr_in', 'section' => 'apr_in'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>AGENCY PROCUREMENT REQUEST STOCK-IN</strong></h4>
                            <form action="{{ route('apr_in.index') }}" method="GET">
                                <input class="pl-lg-4" type="text" name="search" placeholder="Search Item No./Dept." required/>
                                <button type="submit" class="btn btn-sm btn-secondary">Search</button>
                                <a href="{{ route('apr_in.index') }}" class="btn btn-sm btn-secondary">Refresh</a>
                            </form>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('apr_in.create') }}" class="btn btn-sm btn-primary">Add Stock-in</a>
                            <!-- <a href="{{ 'api/apr_in/pdf' }}" class="btn btn-sm btn-primary">Print</a> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">ITEM NO.</th>
                                <th scope="col">DEPARTMENT</th>
                                <th scope="col">STIOCK-IN</th>
                                <th scope="col">DATE</th>
                            </thead>
                            <tbody>
                                @foreach ($apr_in as $item)
                                    <tr>
                                        <td>{{ $item->Apr->item_no??'' }}</td>
                                        <td>{{ $item->department??'' }}</td>
                                        <td>{{ $item->stock_in??'' }}</td>
                                        <td>{{ $item->date??'' }}</td>
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
                       {{ $apr_in->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
