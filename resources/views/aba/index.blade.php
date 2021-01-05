@extends('layouts.app', ['page' => 'aba', 'pageSlug' => 'aba', 'section' => 'aba'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">ABSTRACT OF BIDS AND AWARDS</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('aba.create') }}" class="btn btn-sm btn-primary">Add Awards</a>
                            <a href="{{ 'api/apr/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">ITEM No.</th>
                                <th scope="col">QUANTITY.</th>
                                <th scope="col">UNIT.</th>
                                <th scope="col">PARRICULARS.</th>
                                <th scope="col">BUDGET COST.</th>
                                <th scope="col">REMARKS.</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($aba as $item)
                                    <tr>
                                        <td>{{ $item->item_no}}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->unit }}</td>
                                        <td>{{ $item->parriculars }}</td>
                                        <td>{{ $item->budget_cost }}</td>
                                        <td>{{ $item->remarks }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('aba.edit', $item) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('aba.destroy', $item) }}" method="post" class="d-inline">
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
                       {{ $aba->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
