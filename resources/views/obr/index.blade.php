@extends('layouts.app', ['page' => 'obr', 'pageSlug' => 'obr', 'section' => 'obr'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">OBLIGATION REQUEST AND STATUS</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('obr.create') }}" class="btn btn-sm btn-primary">Add Status</a>
                            <a href="{{ 'api/obr/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">SERIAL NO.</th>
                                <th scope="col">DATE</th>
                                <th scope="col">FUND CLUSTER</th>
                                <th scope="col">PAYEE</th>
                                <th scope="col">OFFICE</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">RESPONSIBILITY CENTER</th>
                                <th scope="col">AMOUNT</th>
                                <th scope="col">PARTICULARS</th>
                                <th scope="col">PAP</th>
                                <th scope="col">OBJECT CODE</th>
                                <th scope="col">AMOUNT</th>
                                <th scope="col">REFERENCE DATE</th>
                                <th scope="col">REFERENCE PARTICULARS</th>
                                <th scope="col">ORS/JEV/Check/        ADA/TRA No.</th>
                                <th scope="col">AMOUNT</th>
                                <th scope="col">OBLIGATION</th>
                                <th scope="col">PAYABLE</th>
                                <th scope="col">PAYMENT</th>
                                <th scope="col">BALANCE</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($obr as $eli)
                                    <tr>
                                        <td>{{ $eli->serial_no }}</td>
                                        <td>{{ $eli->date }}</td>
                                        <td>{{ $eli->fund_cluster }}</td>
                                        <td>{{ $eli->payee }}</td>
                                        <td>{{ $eli->office }}</td>
                                        <td>{{ $eli->address }}</td>
                                        <td>{{ $eli->responsibility_center }}</td>
                                        <td>{{ $eli->particulars }}</td>
                                        <td>{{ $eli->pap }}</td>
                                        <td>{{ $eli->object_code }}</td>
                                        <td>{{ $eli->amount }}</td>
                                        <td>{{ $eli->refer_date }}</td>
                                        <td>{{ $eli->refer_particulars }}</td>
                                        <td>{{ $eli->tra_no }}</td>
                                        <td>{{ $eli->amount }}</td>
                                        <td>{{ $eli->obligation }}</td>
                                        <td>{{ $eli->payable }}</td>
                                        <td>{{ $eli->payment }}</td>
                                        <td>{{ $eli->balance }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('obr.edit', $eli) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('obr.destroy', $eli) }}" method="post" class="d-inline">
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
                       {{ $obr->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
