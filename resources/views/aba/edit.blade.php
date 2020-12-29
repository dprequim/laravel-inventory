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
                                <a href="{{ route('aba.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('aba.update', $aba) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Bids And Awards information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('item_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-item_no">{{ __('ITEM No.') }}</label>
                                    <input type="text" name="item_no" id="input-item_no" class="form-control form-control-alternative{{ $errors->has('item_no') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('item_no', $aba->item_no) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'item_no'])
                                </div>
                                <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-quantity">{{ __('QUANTITY') }}</label>
                                    <input type="text" name="quantity" id="input-quantity" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('quantity', $aba->quantity) }}" required>
                                    @include('alerts.feedback', ['field' => 'quantity'])
                                </div>
                                <div class="form-group{{ $errors->has('unit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit">{{ __('UNIT') }}</label>
                                    <input type="text" name="unit" id="input-unit" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('unit', $aba->unit) }}" required>
                                    @include('alerts.feedback', ['field' => 'unit'])
                                </div>
                                <div class="form-group{{ $errors->has('parriculars') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-parriculars">{{ __('PARRICULARS') }}</label>
                                    <input type="text" name="parriculars" id="input-parriculars" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('parriculars', $aba->parriculars) }}" required>
                                    @include('alerts.feedback', ['field' => 'parriculars'])
                                </div>
                                <div class="form-group{{ $errors->has('budget_cost') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-budget_cost">{{ __('BUDGET COST') }}</label>
                                    <input type="text" name="budget_cost" id="input-budget_cost" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('budget_cost', $aba->budget_cost) }}" required>
                                    @include('alerts.feedback', ['field' => 'budget_cost'])
                                </div>
                                <div class="form-group{{ $errors->has('remarks') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-remarks">{{ __('REMARKS') }}</label>
                                    <input type="text" name="remarks" id="input-remarks" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('remarks', $aba->remarks) }}" required>
                                    @include('alerts.feedback', ['field' => 'remarks'])
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
