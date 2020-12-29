@extends('layouts.app', ['page' => 'tin', 'pageSlug' => 'tin', 'section' => 'tin'])

@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">TIN</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('tin.create') }}" class="btn btn-sm btn-primary">New Method</a>
                            <a href="{{ 'api/tin/pdf' }}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">Company Name</th>
                                <th scope="col">Company TIN</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($tin as $item)
                                    <tr>
                                        <td>{{ $item->company_name }}</td>
                                        <td>{{ $item->company_tin }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('tin.edit', $item) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Item">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('tin.destroy', $item) }}" method="post" class="d-inline">
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
                       {{ $tin->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
