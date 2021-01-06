@extends('layouts.app', ['page' => __('Method Management'), 'pageSlug' => 'ri', 'section' => 'transactions'])

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
                                <a href="{{ route('ris.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('ris.update', $ri) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Product information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('requisition') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-requisition">{{ __('REQUISITION ') }}</label>
                                    <input type="text" name="requisition" id="input-requisition" class="form-control form-control-alternative{{ $errors->has('requisition') ? ' is-invalid' : '' }}" placeholder="{{ __('REQUISITION') }}" value="{{ old('requisition', $ri->requisition) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'requisition'])
                                </div>
                                <div class="form-group{{ $errors->has('stock_availability') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-stock_availability">{{ __('STOCK AVAILABILITY') }}</label>
                                    <input type="text" name="stock_availability" id="input-stock_availability" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('STOCK AVAILABILITY') }}" value="{{ old('stock_availability', $ri->stock_availability) }}" required>
                                    @include('alerts.feedback', ['field' => 'stock_availability'])
                                </div>
                                <div class="form-group{{ $errors->has('issue') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-issue">{{ __('ISSUE') }}</label>
                                    <input type="text" name="issue" id="input-issue" class="form-control form-control-alternative{{ $errors->has('issue') ? ' is-invalid' : '' }}" placeholder="{{ __('ISSUE') }}" value="{{ old('issue', $ri->issue) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'issue'])
                                </div>
                                <div class="form-group{{ $errors->has('remarks') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-remarks">{{ __('REMARKS') }}</label>
                                    <input type="text" name="remarks" id="input-remarks" class="form-control form-control-alternative{{ $errors->has('remarks') ? ' is-invalid' : '' }}" placeholder="{{ __('REMARKS') }}" value="{{ old('remarks', $ri->remarks) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'remarks'])
                                </div>
                                <div class="form-group{{ $errors->has('unit_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit_price">{{ __('UNIT PRICE') }}</label>
                                    <input type="text" name="unit_price" id="input-unit_price" class="form-control form-control-alternative{{ $errors->has('unit_price') ? ' is-invalid' : '' }}" placeholder="{{ __('UNIT PRICE') }}" value="{{ old('unit_price', $ri->unit_price) }}" required autofocus>
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
