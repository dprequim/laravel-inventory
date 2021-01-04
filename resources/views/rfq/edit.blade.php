@extends('layouts.app', ['page' => __('Method Management'), 'pageSlug' => 'apr', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Method Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('rfq.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('rfq.update', $rfq) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Product information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('item_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-item_no">{{ __('ITEM NO.') }}</label>
                                    <input type="text" name="item_no" id="input-item_no" class="form-control form-control-alternative{{ $errors->has('item_no') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('item_no', $rfq->item_no) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'item_no'])
                                </div>
                                <div class="form-group{{ $errors->has('unit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit">{{ __('INPUT UNIT') }}</label>
                                    <input type="text" name="unit" id="input-unit" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('unit', $rfq->unit) }}" required>
                                    @include('alerts.feedback', ['field' => 'unit'])
                                </div>
                                 <div class="form-group{{ $errors->has('item_desc') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-item_desc">{{ __('ITEM DESCRIPTION') }}</label>
                                    <input type="text" name="item_desc" id="input-item_desc" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('item_desc', $rfq->item_desc) }}" required>
                                    @include('alerts.feedback', ['field' => 'item_desc'])
                                </div>
                                 <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-quantity">{{ __('QUALITY') }}</label>
                                    <input type="text" name="quantity" id="input-quantity" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('quantity', $rfq->quantity) }}" required>
                                    @include('alerts.feedback', ['field' => 'quantity'])
                                </div>
                                 <div class="form-group{{ $errors->has('bid_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-bid_price">{{ __('BID PRICE') }}</label>
                                    <input type="text" name="bid_price" id="input-bid_price" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('bid_price', $rfq->bid_price) }}" required>
                                    @include('alerts.feedback', ['field' => 'bid_price'])
                                </div>
                                 <div class="form-group{{ $errors->has('unit_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit_price">{{ __('UNIT PRICE') }}</label>
                                    <input type="text" name="unit_price" id="input-unit_price" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('unit_price', $rfq->unit_price) }}" required>
                                    @include('alerts.feedback', ['field' => 'unit_price'])
                                </div>
                                 <div class="form-group{{ $errors->has('total_amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-total_amount">{{ __('TOTAL AMOUT') }}</label>
                                    <input type="text" name="total_amount" id="input-total_amount" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('total_amount', $rfq->total_amount) }}" required>
                                    @include('alerts.feedback', ['field' => 'total_amount'])
                                </div>



                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
