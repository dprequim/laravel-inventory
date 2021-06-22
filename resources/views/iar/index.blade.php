@extends('layouts.app', ['page' => 'iar', 'pageSlug' => 'iar', 'section' => 'iar'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong> Inspection and Acceptance Report</strong>
                            </h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('iar.create') }}" class="btn btn-sm btn-primary">Add Report</a>
                            <a href="{{ 'api/iar/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">PROPERTY No.</th>
                                <th scope="col">DESCRIPTION.</th>
                                <th scope="col">UNIT.</th>
                                <th scope="col">QUANTITY.</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($iar as $item)
                                    <tr>
                                        <td>{{ $item->property_no}}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->unit }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('iar.edit', $item) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('iar.destroy', $item) }}" method="post" class="d-inline">
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
                       {{ $iar->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
