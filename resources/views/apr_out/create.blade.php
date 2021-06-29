@extends('layouts.app', ['page' => 'APR Stock-out', 'pageSlug' => 'apr_out-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Agency Procurement Request Stock-in</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('apr_out.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('apr_out.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('apr_id') ? ' has-danger' : '' }}">
                                <select style="color:gray;" class="form-control" name="apr_id">
                                <option selected="true" disabled="disabled">Select Item No.</option>  
                                    @foreach($apr as $item)
                                    <option value="{{$item->id}}">{{$item->item_no}}</option>
                                    @endforeach
                                </select>
                                    @include('alerts.feedback', ['field' => 'apr_id'])
                                </div>
                                <div class="form-group{{ $errors->has('department') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-department">Department</label>
                                    <input type="text" name="department" id="input-department" class="form-control form-control-alternative{{ $errors->has('department') ? ' is-invalid' : '' }}" value="{{ old('department') }}" required>
                                    @include('alerts.feedback', ['field' => 'department'])
                                </div>
                                <div class="form-group{{ $errors->has('stock_out') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-stock_out">Stock-out</label>
                                    <input type="text" name="stock_out" id="input-stock_out" class="form-control form-control-alternative{{ $errors->has('stock_out') ? ' is-invalid' : '' }}" value="{{ old('stock_out') }}" required>
                                    @include('alerts.feedback', ['field' => 'stock_out'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">Date</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}" value="{{ old('date') }}" required>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
