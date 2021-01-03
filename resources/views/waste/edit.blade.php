@extends('layouts.app', ['page' => __('Method Management'), 'pageSlug' => 'waste', 'section' => 'transactions'])

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
                                <a href="{{ route('waste.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('waste.update', $waste) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Report information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('fund_cluster') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-fund_cluster">{{ __('Fund Cluster') }}</label>
                                    <input type="text" name="fund_cluster" id="input-fund_cluster" class="form-control form-control-alternative{{ $errors->has('fund_cluster') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('fund_cluster', $waste->fund_cluster) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'fund_cluster'])
                                </div>
                                <div class="form-group{{ $errors->has('storage_place') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-storage_place">{{ __('Place of Storage') }}</label>
                                    <input type="text" name="storage_place" id="input-storage_place" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('storage_place', $waste->storage_place) }}" required>
                                    @include('alerts.feedback', ['field' => 'storage_place'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">{{ __('Date') }}</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('date', $waste->date) }}" required>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="form-group{{ $errors->has('items') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-items">{{ __('Items') }}</label>
                                    <input type="text" name="items" id="input-items" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('items', $waste->items) }}" required>
                                    @include('alerts.feedback', ['field' => 'items'])
                                </div>
                                <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-quantity">{{ __('Quantity') }}</label>
                                    <input type="text" name="quantity" id="input-quantity" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('quantity', $waste->quantity) }}" required>
                                    @include('alerts.feedback', ['field' => 'quantity'])
                                </div>
                                <div class="form-group{{ $errors->has('unit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit">{{ __('Unit') }}</label>
                                    <input type="text" name="unit" id="input-unit" class="form-control form-control-alternative{{ $errors->has('unit') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('unit', $waste->unit) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'unit'])
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-description">{{ __('Description') }}</label>
                                    <input type="text" name="description" id="input-description" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('description', $waste->description) }}" required>
                                    @include('alerts.feedback', ['field' => 'description'])
                                </div>
                                <div class="form-group{{ $errors->has('reciept_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-reciept_no">{{ __('Receipt No.') }}</label>
                                    <input type="text" name="reciept_no" id="input-reciept_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('reciept_no', $waste->reciept_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'reciept_no'])
                                </div>
                                <div class="form-group{{ $errors->has('receipt_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-receipt_date">{{ __('Receipt Date') }}</label>
                                    <input type="text" name="receipt_date" id="input-receipt_date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('receipt_date', $waste->receipt_date) }}" required>
                                    @include('alerts.feedback', ['field' => 'receipt_date'])
                                </div>
                                <div class="form-group{{ $errors->has('receipt_amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-receipt_amount">{{ __('Receipt Amount') }}</label>
                                    <input type="text" name="receipt_amount" id="input-receipt_amount" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('receipt_amount', $waste->receipt_amount) }}" required>
                                    @include('alerts.feedback', ['field' => 'receipt_amount'])
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
