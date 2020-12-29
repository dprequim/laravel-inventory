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
                                <a href="{{ route('purchaserequest.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('purchaserequest.update', $purchaserequest) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Request information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('office_section') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-office_section">{{ __('OFFICE SECTION') }}</label>
                                    <input type="text" name="office_section" id="input-office_section" class="form-control form-control-alternative{{ $errors->has('office_section') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('office_section', $purchaserequest->office_section) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'item_no'])
                                </div>
                                <div class="form-group{{ $errors->has('pr_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-pr_no">{{ __('PR No.') }}</label>
                                    <input type="text" name="pr_no" id="input-pr_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('pr_no', $purchaserequest->pr_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'pr_no'])
                                </div>
                                <div class="form-group{{ $errors->has('center_code') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-center_code">{{ __('CENTER CODE') }}</label>
                                    <input type="text" name="center_code" id="input-center_code" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('center_code', $purchaserequest->center_code) }}" required>
                                    @include('alerts.feedback', ['field' => 'center_code'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">{{ __('DATE') }}</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('date', $purchaserequest->date) }}" required>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="form-group{{ $errors->has('property_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-property_no">{{ __('PROPERTY NO.') }}</label>
                                    <input type="text" name="property_no" id="input-property_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('property_no', $purchaserequest->property_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'property_no'])
                                </div>
                                <div class="form-group{{ $errors->has('item_desc') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-item_desc">{{ __('ITEM DESCRIPTION') }}</label>
                                    <input type="text" name="item_desc" id="input-item_desc" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('item_desc', $purchaserequest->item_desc) }}" required>
                                    @include('alerts.feedback', ['field' => 'item_desc'])
                                </div>
                                <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-quantity">{{ __('QUANTITY') }}</label>
                                    <input type="text" name="quantity" id="input-quantity" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('quantity', $purchaserequest->quantity) }}" required>
                                    @include('alerts.feedback', ['field' => 'quantity'])
                                </div>
                                <div class="form-group{{ $errors->has('unit_cost') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit_cost">{{ __('UNIT COST') }}</label>
                                    <input type="text" name="unit_cost" id="input-unit_cost" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('unit_cost', $purchaserequest->unit_cost) }}" required>
                                    @include('alerts.feedback', ['field' => 'unit_cost'])
                                </div>
                                <div class="form-group{{ $errors->has('total_cost') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-total_cost">{{ __('TOTAL COST') }}</label>
                                    <input type="text" name="total_cost" id="input-total_cost" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('total_cost', $purchaserequest->total_cost) }}" required>
                                    @include('alerts.feedback', ['field' => 'total_cost'])
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
