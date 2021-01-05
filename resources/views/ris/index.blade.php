@extends('layouts.app', ['page' => 'ris', 'pageSlug' => 'ris', 'section' => 'ris'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Requisition Slip</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('ris.create') }}" class="btn btn-sm btn-primary">Add Slip</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">REQUISITION</th>
                                <th scope="col">STOCK AVAILABILITY</th>
                                <th scope="col">ISSUE</th>
                                <th scope="col">REMARKS</th>
                                <th scope="col">UNIT PRICE</th>

                            </thead>
                            <tbody>
                                @foreach ($ri as $wol)
                                    <tr>
                                        <td>{{ $wol->requisition }}</td>
                                        <td>{{ $wol->stock_availability }}</td>
                                        <td>{{ $wol->issue }}</td>
                                        <td>{{ $wol->remarks }}</td>
                                        <td>{{ $wol->unit_price }}</td>

                                        <td class="td-actions text-right">
                                            <a href="{{ route('ris.edit', $wol) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('ris.destroy', $wol) }}" method="post" class="d-inline">
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
                       {{ $ri->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
