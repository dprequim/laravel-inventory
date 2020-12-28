@extends('layouts.app', ['page' => 'Purchase Request', 'pageSlug' => 'apr-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Purchase Request</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('purchaserequest.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('purchaserequest.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('office_section') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-office_section">OFFICE SECTION</label>
                                    <input type="text" name="office_section" id="input-office_section" class="form-control form-control-alternative{{ $errors->has('office_section') ? ' is-invalid' : '' }}"  value="{{ old('office_section') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'office_section'])
                                </div>
                                <div class="form-group{{ $errors->has('pr_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-pr_no">PR No.</label>
                                    <input type="text" name="pr_no" id="input-pr_no" class="form-control form-control-alternative{{ $errors->has('pr_no') ? ' is-invalid' : '' }}"  value="{{ old('pr_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'pr_no'])
                                </div>
                                <div class="form-group{{ $errors->has('center_code') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-center_code">CENTER CODE</label>
                                    <input type="text" name="center_code" id="input-center_code" class="form-control form-control-alternative{{ $errors->has('center_code') ? ' is-invalid' : '' }}"  value="{{ old('center_code') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'center_code'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">DATE</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}"  value="{{ old('date') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="form-group{{ $errors->has('property_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-property_no">PROPERTY No.</label>
                                    <input type="text" name="property_no" id="input-property_no" class="form-control form-control-alternative{{ $errors->has('property_no') ? ' is-invalid' : '' }}"  value="{{ old('property_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'property_no'])
                                </div>
                                <div class="form-group{{ $errors->has('item_desc') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-item_desc">ITEM DESC</label>
                                    <input type="text" name="item_desc" id="input-item_desc" class="form-control form-control-alternative{{ $errors->has('item_desc') ? ' is-invalid' : '' }}"  value="{{ old('item_desc') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'item_desc'])
                                </div>
                                <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-quantity">QUANTITY</label>
                                    <input type="text" name="quantity" id="input-quantity" class="form-control form-control-alternative{{ $errors->has('quantity') ? ' is-invalid' : '' }}"  value="{{ old('quantity') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'quantity'])
                                </div>
                                <div class="form-group{{ $errors->has('unit_cost') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit_cost">UNIT COST</label>
                                    <input type="text" name="unit_cost" id="input-unit_cost" class="form-control form-control-alternative{{ $errors->has('unit_cost') ? ' is-invalid' : '' }}" value="{{ old('unit_cost') }}" required>
                                    @include('alerts.feedback', ['field' => 'unit_cost'])
                                </div>
                                <div class="form-group{{ $errors->has('total_cost') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-total_cost">TOTAL COST</label>
                                    <input type="text" name="total_cost" id="input-total_cost" class="form-control form-control-alternative{{ $errors->has('total_cost') ? ' is-invalid' : '' }}" value="{{ old('total_cost') }}" required>
                                    @include('alerts.feedback', ['field' => 'total_cost'])
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
