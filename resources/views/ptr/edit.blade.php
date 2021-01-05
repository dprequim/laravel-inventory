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
                                <a href="{{ route('ptr.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('ptr.update', $ptr) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Request information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('fund_cluster') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-fund_cluster">{{ __('FUND CLUSTER') }}</label>
                                    <input type="text" name="fund_cluster" id="input-fund_cluster" class="form-control form-control-alternative{{ $errors->has('fund_cluster') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('fund_cluster', $ptr->fund_cluster) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'item_no'])
                                </div>
                                <div class="form-group{{ $errors->has('from_officer') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-from_officer">{{ __('FROM OFFICER') }}</label>
                                    <input type="text" name="from_officer" id="input-from_officer" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('from_officer', $ptr->from_officer) }}" required>
                                    @include('alerts.feedback', ['field' => 'from_officer'])
                                </div>
                                <div class="form-group{{ $errors->has('to_officer') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-to_officer">{{ __('TO OFFICER') }}</label>
                                    <input type="text" name="to_officer" id="input-to_officer" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('to_officer', $ptr->to_officer) }}" required>
                                    @include('alerts.feedback', ['field' => 'to_officer'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">{{ __('DATE') }}</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('date', $ptr->date) }}" required>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="form-group{{ $errors->has('transfer_type') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-transfer_type">{{ __('TRANSFER TYPE') }}</label>
                                    <input type="text" name="transfer_type" id="input-transfer_type" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('transfer_type', $ptr->transfer_type) }}" required>
                                    @include('alerts.feedback', ['field' => 'transfer_type'])
                                </div>
                                <div class="form-group{{ $errors->has('acquired_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-acquired_date">{{ __('ACQUIRED DATE') }}</label>
                                    <input type="text" name="acquired_date" id="input-acquired_date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('acquired_date', $ptr->acquired_date) }}" required>
                                    @include('alerts.feedback', ['field' => 'acquired_date'])
                                </div>
                                <div class="form-group{{ $errors->has('property_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-property_no">{{ __('PROPERTY NO.') }}</label>
                                    <input type="text" name="property_no" id="input-property_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('property_no', $ptr->property_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'property_no'])
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-description">{{ __('DESCRIPTION') }}</label>
                                    <input type="text" name="description" id="input-description" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('description', $ptr->description) }}" required>
                                    @include('alerts.feedback', ['field' => 'description'])
                                </div>
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-amount">{{ __('AMOUNT') }}</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('amount', $ptr->amount) }}" required>
                                    @include('alerts.feedback', ['field' => 'amount'])
                                </div>
                                <div class="form-group{{ $errors->has('ppe_condition') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-ppe_condition">{{ __('PPE CONDITION') }}</label>
                                    <input type="text" name="ppe_condition" id="input-ppe_condition" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('ppe_condition', $ptr->ppe_condition) }}" required>
                                    @include('alerts.feedback', ['field' => 'ppe_condition'])
                                </div>
                                <div class="form-group{{ $errors->has('transfer_reason') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-transfer_reason">{{ __('TRANSFER REASON') }}</label>
                                    <input type="text" name="transfer_reason" id="input-transfer_reason" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('transfer_reason', $ptr->transfer_reason) }}" required>
                                    @include('alerts.feedback', ['field' => 'transfer_reason'])
                                </div>
                                <div class="form-group{{ $errors->has('signature') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-signature">{{ __('SIGNATURE') }}</label>
                                    <input type="text" name="signature" id="input-signature" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('signature', $ptr->signature) }}" required>
                                    @include('alerts.feedback', ['field' => 'signature'])
                                </div>
                                <div class="form-group{{ $errors->has('printed_name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-printed_name">{{ __('PRINTED NAME') }}</label>
                                    <input type="text" name="printed_name" id="input-printed_name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('printed_name', $ptr->printed_name) }}" required>
                                    @include('alerts.feedback', ['field' => 'printed_name'])
                                </div>
                                <div class="form-group{{ $errors->has('designation') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-designation">{{ __('DESIGNATION') }}</label>
                                    <input type="text" name="designation" id="input-designation" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('designation', $ptr->designation) }}" required>
                                    @include('alerts.feedback', ['field' => 'designation'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">{{ __('DATE') }}</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('date', $ptr->date) }}" required>
                                    @include('alerts.feedback', ['field' => 'date'])
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
 