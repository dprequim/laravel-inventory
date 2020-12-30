@extends('layouts.app', ['page' => 'New porder', 'pageSlug' => 'porder-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Purchase Order</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('porder.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('porder.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('supplier') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-supplier">SUPPLIER.</label>
                                    <input type="text" name="supplier" id="input-supplier" class="form-control form-control-alternative{{ $errors->has('supplier') ? ' is-invalid' : '' }}"  value="{{ old('supplier') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'supplier'])
                                </div>
                                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">ADDRESS</label>
                                    <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{ old('address') }}" required>
                                    @include('alerts.feedback', ['field' => 'address'])
                                </div>
                                <div class="form-group{{ $errors->has('tin') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tin">TIN</label>
                                    <input type="text" name="tin" id="input-tin" class="form-control form-control-alternative{{ $errors->has('tin') ? ' is-invalid' : '' }}" value="{{ old('tin') }}" required>
                                    @include('alerts.feedback', ['field' => 'tin'])
                                </div>
                                <div class="form-group{{ $errors->has('po_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-po_no">PO No.</label>
                                    <input type="text" name="po_no" id="input-po_no" class="form-control form-control-alternative{{ $errors->has('po_no') ? ' is-invalid' : '' }}" value="{{ old('po_no') }}" required>
                                    @include('alerts.feedback', ['field' => 'po_no'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">DATE</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}" value="{{ old('date') }}" required>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="form-group{{ $errors->has('property_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-property_no">PROPERTY No.</label>
                                    <input type="text" name="property_no" id="input-property_no" class="form-control form-control-alternative{{ $errors->has('property_no') ? ' is-invalid' : '' }}"  value="{{ old('property_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'property_no'])
                                </div>
                                <div class="form-group{{ $errors->has('unit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit">UNIT</label>
                                    <input type="text" name="unit" id="input-unit" class="form-control form-control-alternative{{ $errors->has('unit') ? ' is-invalid' : '' }}" value="{{ old('unit') }}" required>
                                    @include('alerts.feedback', ['field' => 'unit'])
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-description">DESCRIPTION</label>
                                    <input type="text" name="description" id="input-description" class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description') }}" required>
                                    @include('alerts.feedback', ['field' => 'description'])
                                </div>
                                <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-quantity">QUANTITY</label>
                                    <input type="text" name="quantity" id="input-quantity" class="form-control form-control-alternative{{ $errors->has('quantity') ? ' is-invalid' : '' }}" value="{{ old('quantity') }}" required>
                                    @include('alerts.feedback', ['field' => 'quantity'])
                                </div>
                                <div class="form-group{{ $errors->has('unit_cost') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit_cost">UNIT COST</label>
                                    <input type="text" name="unit_cost" id="input-unit_cost" class="form-control form-control-alternative{{ $errors->has('unit_cost') ? ' is-invalid' : '' }}" value="{{ old('unit_cost') }}" required>
                                    @include('alerts.feedback', ['field' => 'unit_cost'])
                                </div>
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-amount">AMOUNT.</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}"  value="{{ old('amount') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'amount'])
                                </div>
                                <div class="form-group{{ $errors->has('fund_cluster') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-fund_cluster">FUND CLUSTER</label>
                                    <input type="text" name="fund_cluster" id="input-fund_cluster" class="form-control form-control-alternative{{ $errors->has('fund_cluster') ? ' is-invalid' : '' }}" value="{{ old('fund_cluster') }}" required>
                                    @include('alerts.feedback', ['field' => 'fund_cluster'])
                                </div>
                                <div class="form-group{{ $errors->has('funds_available') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-funds_available">FUNDS AVAILABLE</label>
                                    <input type="text" name="funds_available" id="input-funds_available" class="form-control form-control-alternative{{ $errors->has('funds_available') ? ' is-invalid' : '' }}" value="{{ old('funds_available') }}" required>
                                    @include('alerts.feedback', ['field' => 'funds_available'])
                                </div>
                                <div class="form-group{{ $errors->has('burs_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-burs_no">BURS No.</label>
                                    <input type="text" name="burs_no" id="input-burs_no" class="form-control form-control-alternative{{ $errors->has('burs_no') ? ' is-invalid' : '' }}" value="{{ old('burs_no') }}" required>
                                    @include('alerts.feedback', ['field' => 'burs_no'])
                                </div>
                                <div class="form-group{{ $errors->has('date_burs') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date_burs">DATE BURS</label>
                                    <input type="text" name="date_burs" id="input-date_burs" class="form-control form-control-alternative{{ $errors->has('date_burs') ? ' is-invalid' : '' }}" value="{{ old('date_burs') }}" required>
                                    @include('alerts.feedback', ['field' => 'date_burs'])
                                </div>
                                <div class="form-group{{ $errors->has('ors_amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-ors_amount">TOTAL AMOUNT</label>
                                    <input type="text" name="ors_amount" id="input-ors_amount" class="form-control form-control-alternative{{ $errors->has('ors_amount') ? ' is-invalid' : '' }}" value="{{ old('ors_amount') }}" required>
                                    @include('alerts.feedback', ['field' => 'ors_amount'])
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
