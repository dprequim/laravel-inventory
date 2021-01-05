@extends('layouts.app', ['page' => 'New RequisitionSlip', 'pageSlug' => 'ris-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">NEW REQUISITION SLIP</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('ris.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('ris.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('requisition') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">REQUISITION</label>
                                    <input type="text" name="requisition" id="input-requisition" class="form-control form-control-alternative{{ $errors->has('requisition') ? ' is-invalid' : '' }}"  value="{{ old('requisition') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'requisition'])
                                </div>
                                <div class="form-group{{ $errors->has('stock_availability') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-stock_availability">STOCK AVAILABILITY</label>
                                    <input type="text" name="stock_availability" id="input-stock_availability" class="form-control form-control-alternative{{ $errors->has('stock_availability') ? ' is-invalid' : '' }}" value="{{ old('stock_availability') }}" required>
                                    @include('alerts.feedback', ['field' => 'Stock Availability'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('ris.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('issue') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">ISSUE</label>
                                    <input type="text" name="issue" id="input-issue" class="form-control form-control-alternative{{ $errors->has('issue') ? ' is-invalid' : '' }}"  value="{{ old('issue') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'issue'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('ris.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('remarks') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">REMARKS</label>
                                    <input type="text" name="remarks" id="input-remarks" class="form-control form-control-alternative{{ $errors->has('remarks') ? ' is-invalid' : '' }}"  value="{{ old('remarks') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'remarks'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('ris.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('unit_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">UNIT PRICE</label>
                                    <input type="text" name="unit_price" id="input-unit_price" class="form-control form-control-alternative{{ $errors->has('unit_price') ? ' is-invalid' : '' }}"  value="{{ old('unit_price') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'unit_price'])
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
