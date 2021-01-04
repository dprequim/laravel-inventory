@extends('layouts.app', ['page' => 'rep', 'pageSlug' => 'rep', 'section' => 'rep'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Repair Inspection</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('rep.create') }}" class="btn btn-sm btn-primary">New Method</a>
                            <a href="{{ 'api/rep/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">TYPE</th>
                                <th scope="col">ENGINE NO</th>
                                <th scope="col">ACQ DATE</th>
                                <th scope="col">LAST REPAIR DATE</th>
                                <th scope="col">BRAND NAME</th>
                                <th scope="col">PROPERTY</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($rep as $re)
                                    <tr>
                                        <td>{{ $re->type }}</td>
                                        <td>{{ $re->engine_no }}</td>
                                        <td>{{ $re->acq_date }}</td>
                                        <td>{{ $re->lastrepair_date }}</td>
                                        <td>{{ $re->brand_name }}</td>
                                        <td>{{ $re->property_no }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('rep.edit', $re) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('rep.destroy', $re) }}" method="post" class="d-inline">
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
                       {{ $rep->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
 