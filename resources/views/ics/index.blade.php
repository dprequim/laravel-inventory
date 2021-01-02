@extends('layouts.app', ['page' => 'ics', 'pageSlug' => 'ics', 'section' => 'ics'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Custodian Slip Supply</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('ics.create') }}" class="btn btn-sm btn-primary">New Method</a>
                            <a href="{{ 'api/ics/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">ITEM DESCRIPTION</th>
                                <th scope="col">QUANTITY</th>
                                <th scope="col">UNIT AMOUNT</th>
                                <th scope="col">UNIT COST</th>
                                <th scope="col">TOTAL COST</th>
                                <th scope="col">DESCRIPTION</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($ics as $dev)
                                    <tr>
                                        <td>{{ $dev->item_desc }}</td>
                                        <td>{{ $dev->quantity }}</td>
                                        <td>{{ $dev->unit_amount }}</td>
                                        <td>{{ $dev->unit_cost }}</td>
                                        <td>{{ $dev->total_cost }}</td>
                                        <td>{{ $dev->descprition }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('ics.edit', $dev) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('ics.destroy', $dev) }}" method="post" class="d-inline">
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
                       {{ $ics->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
