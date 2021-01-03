@extends('layouts.app', ['page' => 'New Report', 'pageSlug' => 'Waste-Create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Waste Material Report</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('waste.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('waste.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('fund_cluster') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-fund_cluster">Fund Cluster.</label>
                                    <input type="text" name="fund_cluster" id="input-fund_cluster" class="form-control form-control-alternative{{ $errors->has('fund_cluster') ? ' is-invalid' : '' }}"  value="{{ old('fund_cluster') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'fund_cluster'])
                                </div>
                                <div class="form-group{{ $errors->has('storage_place') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-storage_place">Place of Storage</label>
                                    <input type="text" name="storage_place" id="input-storage_place" class="form-control form-control-alternative{{ $errors->has('storage_place') ? ' is-invalid' : '' }}" value="{{ old('storage_place') }}" required>
                                    @include('alerts.feedback', ['field' => 'storage_place'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">Date</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}" value="{{ old('date') }}" required>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="form-group{{ $errors->has('items') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-items">Items</label>
                                    <input type="text" name="items" id="input-items" class="form-control form-control-alternative{{ $errors->has('items') ? ' is-invalid' : '' }}" value="{{ old('items') }}" required>
                                    @include('alerts.feedback', ['field' => 'items'])
                                </div>
                                <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-quantity">Quantity</label>
                                    <input type="text" name="quantity" id="input-quantity" class="form-control form-control-alternative{{ $errors->has('quantity') ? ' is-invalid' : '' }}" value="{{ old('quantity') }}" required>
                                    @include('alerts.feedback', ['field' => 'quantity'])
                                </div>                                
                                <div class="form-group{{ $errors->has('unit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit">UNIT</label>
                                    <input type="text" name="unit" id="input-unit" class="form-control form-control-alternative{{ $errors->has('unit') ? ' is-invalid' : '' }}" value="{{ old('unit') }}" required>
                                    @include('alerts.feedback', ['field' => 'unit'])
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-description">Description</label>
                                    <input type="text" name="description" id="input-description" class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description') }}" required>
                                    @include('alerts.feedback', ['field' => 'description'])
                                </div>
                                <div class="form-group{{ $errors->has('receipt_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-receipt_no">Receipt No</label>
                                    <input type="text" name="receipt_no" id="input-receipt_no" class="form-control form-control-alternative{{ $errors->has('receipt_no') ? ' is-invalid' : '' }}" value="{{ old('receipt_no') }}" required>
                                    @include('alerts.feedback', ['field' => 'receipt_no'])
                                </div>
                                <div class="form-group{{ $errors->has('receipt_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-receipt_date">Receipt Date</label>
                                    <input type="text" name="receipt_date" id="input-receipt_date" class="form-control form-control-alternative{{ $errors->has('receipt_date') ? ' is-invalid' : '' }}" value="{{ old('receipt_date') }}" required>
                                    @include('alerts.feedback', ['field' => 'receipt_date'])
                                </div>
                                <div class="form-group{{ $errors->has('receipt_amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-receipt_amount">Receipt Amount</label>
                                    <input type="text" name="receipt_amount" id="input-receipt_amount" class="form-control form-control-alternative{{ $errors->has('receipt_amount') ? ' is-invalid' : '' }}" value="{{ old('receipt_amount') }}" required>
                                    @include('alerts.feedback', ['field' => 'receipt_amount'])
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
