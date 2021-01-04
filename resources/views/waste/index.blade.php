@extends('layouts.app', ['page' => 'Waste Material', 'pageSlug' => 'waste', 'section' => 'waste'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Waste Material Report</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('waste.create') }}" class="btn btn-sm btn-primary">New Method</a>
                            <a href="{{ 'api/apr/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">Fund Cluster.</th>
                                <th scope="col">Place of Storage.</th>
                                <th scope="col">Date.</th>
                                <th scope="col">UNIT.</th>
                                <th scope="col">Description.</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($waste as $item)
                                    <tr>
                                        <td>{{ $item->fund_cluster }}</td>
                                        <td>{{ $item->storage_place }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->unit }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('waste.edit', $item) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('waste.destroy', $item) }}" method="post" class="d-inline">
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
                       {{ $waste->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
