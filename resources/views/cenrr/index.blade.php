@extends('layouts.app', ['page' => 'cenrr', 'pageSlug' => 'cenrr', 'section' => 'purchaserequest'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12"> 
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Certification Of Expenses</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('cenrr.create') }}" class="btn btn-sm btn-primary">Add Expenses</a>
                            <a href="{{ 'api/cenrr/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">EMPLOYEE NAME</th>
                                <th scope="col">EMPLOYEE No.</th>
                                <th scope="col">OFFICE</th>
                                <th scope="col">DIVISION</th>
                                <th scope="col">DATE</th>
                                <th scope="col">UNIT AMOUNT</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($cenrr as $ce)
                                    <tr>
                                        <td>{{ $ce->employee_name }}</td>
                                        <td>{{ $ce->employee_no }}</td>
                                        <td>{{ $ce->office }}</td>
                                        <td>{{ $ce->division }}</td>
                                        <td>{{ $ce->date }}</td>
                                        <td>{{ $ce->unit_amount }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('cenrr.edit', $ce) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('cenrr.destroy', $ce) }}" method="post" class="d-inline">
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
                       {{ $cenrr->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
