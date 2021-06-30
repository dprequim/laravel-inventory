@extends('layouts.app', ['page' => 'adas', 'pageSlug' => 'checklisttwo', 'section' => 'checklisttwo'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>Inventory Checklist Lists</strong></h4>
                            <form action="{{ route('checklisttwo.index') }}" method="GET">
                                <input class="pl-lg-4" type="text" name="search" placeholder="Search Item/Property No." required/>
                                <button type="submit" class="btn btn-sm btn-secondary">Search</button>
                                <a href="{{ route('checklisttwo.index') }}" class="btn btn-sm btn-secondary">Refresh</a>
                            </form>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('checklisttwo.create') }}" class="btn btn-sm btn-primary">Add Checklist</a>
                            <a href="{{ 'api/checklisttwo/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">Item</th>
                                <th scope="col">Property No.</th>
                                <th scope="col">ICS No.</th>
                                <th scope="col">Date Acquired</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Property Owner</th>
                                <th scope="col">Transfer To</th>
                                <th scope="col">Status</th>
                                <th scope="col">Location</th>
                                <th scope="col">Remarks</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($checklisttwo as $item)
                                    <tr>
                                        <td>{{ $item->item }}</td>
                                        <td>{{ $item->property_no }}</td>
                                        <td>{{ $item->ics_no }}</td>
                                        <td>{{ $item->date_acquired }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>{{ $item->property_owner }}</td>
                                        <td>{{ $item->transfer_to }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->remarks }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('checklisttwo.edit', $item) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('checklisttwo.destroy', $item) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Delete Item" onclick="confirm('Are you sure you want to remove this checklist?') ? this.parentElement.submit() : ''">
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
                       {{ $checklisttwo->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
