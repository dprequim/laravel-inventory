@extends('layouts.app', ['page' => 'rfq', 'pageSlug' => 'rfq', 'section' => 'rfq'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>Request For Quotation</strong></h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('rfq.create') }}" class="btn btn-sm btn-primary">Add Quatations</a>
                            <a href="{{ 'api/rfq/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class=""> 
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">ITEM NO.</th>
                                <th scope="col">UNIT</th>
                                <th scope="col">ITEM DESC.</th>
                                <th scope="col">QUANTITY</th>
                                <th scope="col">BID PRICE</th>
                                <th scope="col">UNIT PRICE</th>
                                <th scope="col">TOTAL AMOUNT</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($rfq as $r)
                                    <tr>
                                        <td>{{ $r->item_no }}</td>
                                        <td>{{ $r->unit }}</td>
                                        <td>{{ $r->item_desc }}</td>
                                        <td>{{ $r->quantity }}</td>
                                        <td>{{ $r->bid_price }}</td>
                                        <td>{{ $r->unit_price }}</td>
                                        <td>{{ $r->total_amount }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('rfq.edit', $r) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('rfq.destroy', $r) }}" method="post" class="d-inline">
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
                       {{ $rfq->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
