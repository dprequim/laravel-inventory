@extends('layouts.app', ['page' => 'New TIN', 'pageSlug' => 'tin-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">NEW ICS-SUPPLY</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('ics.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('ics.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('item_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">ITEM NUMBER</label>
                                    <input type="text" name="item_no" id="input-item_no" class="form-control form-control-alternative{{ $errors->has('item_no') ? ' is-invalid' : '' }}"  value="{{ old('item_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'item_no'])
                                </div>
                                <div class="form-group{{ $errors->has('item_desc') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-item_desc">ITEM DESCRIPTION</label>
                                    <input type="text" name="item_desc" id="input-item_desc" class="form-control form-control-alternative{{ $errors->has('item_desc') ? ' is-invalid' : '' }}" value="{{ old('item_desc') }}" required>
                                    @include('alerts.feedback', ['field' => 'item_desc'])
                                </div>
                                <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-quantity">QUANTITY</label>
                                    <input type="text" name="quantity" id="input-quantity" class="form-control form-control-alternative{{ $errors->has('quantity') ? ' is-invalid' : '' }}" value="{{ old('quantity') }}" required>
                                    @include('alerts.feedback', ['field' => 'quantity'])
                                </div>
                                <div class="form-group{{ $errors->has('unit_amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit_amount">UNIT AMOUNT</label>
                                    <input type="text" name="unit_amount" id="input-unit_amount" class="form-control form-control-alternative{{ $errors->has('unit_amount') ? ' is-invalid' : '' }}" value="{{ old('unit_amount') }}" required>
                                    @include('alerts.feedback', ['field' => 'unit_amount'])
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
                                <div class="form-group{{ $errors->has('descprition') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-descprition">DESCRIPTION</label>
                                    <input type="text" name="descprition" id="input-descprition" class="form-control form-control-alternative{{ $errors->has('descprition') ? ' is-invalid' : '' }}" value="{{ old('descprition') }}" required>
                                    @include('alerts.feedback', ['field' => 'descprition'])
                                </div>
                                <div class="form-group{{ $errors->has('inventory_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-inventory_no">INVENTORY</label>
                                    <input type="text" name="inventory_no" id="input-inventory_no" class="form-control form-control-alternative{{ $errors->has('inventory_no') ? ' is-invalid' : '' }}" value="{{ old('inventory_no') }}" required>
                                    @include('alerts.feedback', ['field' => 'inventory_no'])
                                </div>
                                <div class="form-group{{ $errors->has('estimated_life') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-estimated_life">ESTIMATED LIFE</label>
                                    <input type="text" name="estimated_life" id="input-estimated_life" class="form-control form-control-alternative{{ $errors->has('estimated_life') ? ' is-invalid' : '' }}" value="{{ old('estimated_life') }}" required>
                                    @include('alerts.feedback', ['field' => 'estimated_life'])
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
