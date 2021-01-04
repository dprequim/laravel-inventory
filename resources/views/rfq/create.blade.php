@extends('layouts.app', ['page' => 'Request For Quotation', 'pageSlug' => 'rfq-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Request For Quotation</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('rfq.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('rfq.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('item_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-item_no">ITEM NO.</label>
                                    <input type="text" name="item_no" id="input-item_no" class="form-control form-control-alternative{{ $errors->has('item_no') ? ' is-invalid' : '' }}"  value="{{ old('item_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'item_no'])
                                </div>
                                <div class="form-group{{ $errors->has('unit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit">UNIT</label>
                                    <input type="text" name="unit" id="input-unit" class="form-control form-control-alternative{{ $errors->has('unit') ? ' is-invalid' : '' }}"  value="{{ old('unit') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'unit'])
                                </div>
                                <div class="form-group{{ $errors->has('item_desc') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-item_desc">ITEM DESC.</label>
                                    <input type="text" name="item_desc" id="input-item_desc" class="form-control form-control-alternative{{ $errors->has('item_desc') ? ' is-invalid' : '' }}"  value="{{ old('item_desc') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'item_desc'])
                                </div>
                                <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-quantity">QUALITY</label>
                                    <input type="text" name="quantity" id="input-quantity" class="form-control form-control-alternative{{ $errors->has('quantity') ? ' is-invalid' : '' }}"  value="{{ old('quantity') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'quantity'])
                                </div>
                                <div class="form-group{{ $errors->has('bid_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-bid_price">BID PRICE</label>
                                    <input type="text" name="bid_price" id="input-bid_price" class="form-control form-control-alternative{{ $errors->has('bid_price') ? ' is-invalid' : '' }}"  value="{{ old('bid_price') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'bid_price'])
                                </div>
                                <div class="form-group{{ $errors->has('unit_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit_price">UNIT PRICE</label>
                                    <input type="text" name="unit_price" id="input-unit_price" class="form-control form-control-alternative{{ $errors->has('unit_price') ? ' is-invalid' : '' }}"  value="{{ old('unit_price') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'unit_price'])
                                </div>
                                <div class="form-group{{ $errors->has('total_amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-total_amount">TOTAL AMOUNT</label>
                                    <input type="text" name="total_amount" id="input-total_amount" class="form-control form-control-alternative{{ $errors->has('total_amount') ? ' is-invalid' : '' }}"  value="{{ old('total_amount') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'total_amount'])
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
