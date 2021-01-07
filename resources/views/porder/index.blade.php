@extends('layouts.app', ['page' => 'porder', 'pageSlug' => 'porder', 'section' => 'porder'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">PURCHASE ORDER</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('porder.create') }}" class="btn btn-sm btn-primary">Add Order</a>
                            <a href="{{ 'api/porder/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">SUPPLIER.</th>
                                <th scope="col">ADDRESS.</th>
                                <th scope="col">TIN.</th>
                                <th scope="col">P.O. No.</th>
                                <th scope="col">DATE.</th>
                                <th scope="col">PROPERTY No.</th>
                                <th scope="col">UNIT.</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($porder as $item)
                                    <tr>
                                        <td>{{ $item->supplier }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->tin }}</td>
                                        <td>{{ $item->po_no }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->property_no }}</td>
                                        <td>{{ $item->unit }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('porder.edit', $item) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('porder.destroy', $item) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Delete Item" onclick="confirm('Are you sure you want to remove this method? The payment records will not be deleted.') ? this.parentElement.submit() : ''">
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
                       {{ $porder->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
