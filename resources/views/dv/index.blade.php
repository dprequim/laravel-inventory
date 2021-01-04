@extends('layouts.app', ['page' => 'dv', 'pageSlug' => 'dv', 'section' => 'rfq'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Request For Quotation</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('dv.create') }}" class="btn btn-sm btn-primary">New Method</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class=""> 
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">FUND CLUSTER</th>
                                <th scope="col">EMPLOYEE NO.</th>
                                <th scope="col">BUR NO.</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">DATE</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($dv as $dis)
                                    <tr>
                                        <td>{{ $dis->fund_cluster }}</td>
                                        <td>{{ $dis->employee_no }}</td>
                                        <td>{{ $dis->bur_no }}</td>
                                        <td>{{ $dis->address }}</td>
                                        <td>{{ $dis->date }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('dv.edit', $dis) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('dv.destroy', $dis) }}" method="post" class="d-inline">
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
                       {{ $dv->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
