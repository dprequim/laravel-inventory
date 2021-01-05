@extends('layouts.app', ['page' => 'ptr', 'pageSlug' => 'ptr', 'section' => 'ptr'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Transfer Report</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('ptr.create') }}" class="btn btn-sm btn-primary">New Method</a>
                            <a href="{{ 'api/ptr/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">FUND CLUSTER</th>
                                <th scope="col">FROM OFFICER</th>
                                <th scope="col">TO OFFICER</th>
                                <th scope="col">DATE</th>
                                <th scope="col">TRANSFER TYPE</th>
                                <th scope="col">AQUIRED DATE</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($ptr as $pt)
                                    <tr>
                                        <td>{{ $pt->fund_cluster }}</td>
                                        <td>{{ $pt->from_officer }}</td>
                                        <td>{{ $pt->to_officer }}</td>
                                        <td>{{ $pt->date }}</td>
                                        <td>{{ $pt->transfer_type }}</td>
                                        <td>{{ $pt->acquired_date }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('ptr.edit', $pt) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('ptr.destroy', $pt) }}" method="post" class="d-inline">
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
                       {{ $ptr->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
 