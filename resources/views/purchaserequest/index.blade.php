@extends('layouts.app', ['page' => 'purchaserequest', 'pageSlug' => 'purchaserequest', 'section' => 'purchaserequest'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Purchase Request</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('purchaserequest.create') }}" class="btn btn-sm btn-primary">Add Request</a>
                            <a href="{{ 'api/purchaserequest/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">OFFICE SECTION.</th>
                                <th scope="col">P.R No.</th>
                                <th scope="col">CENTER CODE.</th>
                                <th scope="col">DATE.</th>
                                <th scope="col">PROPERTY No.</th>
                                <th scope="col">ITEM DESC.</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($purchaserequest as $pr)
                                    <tr>
                                        <td>{{ $pr->office_section }}</td>
                                        <td>{{ $pr->pr_no }}</td>
                                        <td>{{ $pr->center_code }}</td>
                                        <td>{{ $pr->date }}</td>
                                        <td>{{ $pr->property_no }}</td>
                                        <td>{{ $pr->item_desc }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('purchaserequest.edit', $pr) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('purchaserequest.destroy', $pr) }}" method="post" class="d-inline">
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
                       {{ $purchaserequest->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
