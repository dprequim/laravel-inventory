@extends('layouts.app', ['page' => 'routines', 'pageSlug' => 'routines', 'section' => 'routines'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Routine Slip</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('routines.create') }}" class="btn btn-sm btn-primary">Add Slip</a>
                            <a href="{{ 'api/route/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">Full Name</th>
                                <th scope="col">Purpose</th>
                                <th scope="col">Attachments</th>
                                <th scope="col">Date Received</th>
                                <th scope="col">Date Released</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($routine as $item)
                                    <tr>
                                        <td>{{ $item->full_name }}</td>
                                        <td>{{ $item->purpose }}</td>
                                        <td>{{ $item->attachments }}</td>
                                        <td>{{ $item->date_received }}</td>
                                        <td>{{ $item->date_released }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('routines.edit', $item) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('routines.destroy', $item) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Delete Item" onclick="confirm('Are you sure you want to remove this slip?') ? this.parentElement.submit() : ''">
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
                       {{ $routine->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
