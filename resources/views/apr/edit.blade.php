@extends('layouts.app', ['page' => __('APR'), 'pageSlug' => 'apr', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('APR') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('apr.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('apr.update', $apr) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Request information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('item_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-item_no">{{ __('Item No.') }}</label>
                                    <input type="text" name="item_no" id="input-item_no" class="form-control form-control-alternative{{ $errors->has('item_no') ? ' is-invalid' : '' }}" placeholder="{{ __('Item No.') }}" value="{{ old('item_no', $apr->item_no) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'item_no'])
                                </div>
                                <div class="form-group{{ $errors->has('item_desc') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-item_desc">{{ __('Item Description') }}</label>
                                    <input type="text" name="item_desc" id="input-item_desc" class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Item Description') }}" value="{{ old('item_desc', $apr->item_desc) }}" required>
                                    @include('alerts.feedback', ['field' => 'item_desc'])
                                </div>
                                <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-quantity">{{ __('Quantity') }}</label>
                                    <input type="text" name="quantity" id="input-quantity" class="form-control form-control-alternative{{ $errors->has('quantity') ? ' is-invalid' : '' }}" placeholder="{{ __('Quantity') }}" value="{{ old('quantity', $apr->quantity) }}" required>
                                    @include('alerts.feedback', ['field' => 'quantity'])
                                </div>
                                <div class="form-group{{ $errors->has('unit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit">{{ __('Unit') }}</label>
                                    <input type="text" name="unit" id="input-unit" class="form-control form-control-alternative{{ $errors->has('unit') ? ' is-invalid' : '' }}" placeholder="{{ __('Unit') }}" value="{{ old('unit', $apr->unit) }}" required>
                                    @include('alerts.feedback', ['field' => 'unit'])
                                </div>
                                <div class="form-group{{ $errors->has('unit_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit_price">{{ __('Unit Price') }}</label>
                                    <input type="text" name="unit_price" id="input-unit_price" class="form-control form-control-alternative{{ $errors->has('unit_price') ? ' is-invalid' : '' }}" placeholder="{{ __('Unit Price') }}" value="{{ old('unit_price', $apr->unit_price) }}" required>
                                    @include('alerts.feedback', ['field' => 'unit_price'])
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
