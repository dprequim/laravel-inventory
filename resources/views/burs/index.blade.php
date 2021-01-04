@extends('layouts.app', ['page' => 'burs', 'pageSlug' => 'burs', 'section' => 'burs'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Utilization Request</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('burs.create') }}" class="btn btn-sm btn-primary">New Method</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">SERIAL NUMBER</th>
                                <th scope="col">DATE</th>
                                <th scope="col">FUND CLUSTER</th>
                                <th scope="col">RESPONSIBILITY CENTER</th>
                                <th scope="col">PARTICULARS</th>
                                <th scope="col">MFO</th>
                                <th scope="col">EXPENDITURES</th>
                                <th scope="col">AMOUNT</th>
                                <th scope="col">REFERENCE DATE</th>
                                <th scope="col">REFERENCE PARTICULAR</th>
                                <th scope="col">BURS/JEV/RCI/        RADAI/RTRAI No.</th>
                                <th scope="col">UTILIZATION</th>
                                <th scope="col">PAYABLE</th>
                                <th scope="col">PAYMENT</th>
                                <th scope="col">BALANCE</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($bur as $ted)
                                    <tr>
                                        <td>{{ $ted->serial_no }}</td>
                                        <td>{{ $ted->date }}</td>
                                        <td>{{ $ted->funcluster }}</td>
                                        <td>{{ $ted->responsibility_center }}</td>
                                        <td>{{ $ted->particulars }}</td>
                                        <td>{{ $ted->mfo }}</td>
                                        <td>{{ $ted->expenditures }}</td>
                                        <td>{{ $ted->amount }}</td>
                                        <td>{{ $ted->refer_date }}</td>
                                        <td>{{ $ted->refer_partocular }}</td>
                                        <td>{{ $ted->rtrai_no }}</td>
                                        <td>{{ $ted->utilization }}</td>
                                        <td>{{ $ted->payable }}</td>
                                        <td>{{ $ted->payment }}</td>
                                        <td>{{ $ted->balance }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('burs.edit', $ted) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('burs.destroy', $ted) }}" method="post" class="d-inline">
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
                       {{ $bur->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
