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
                                <a href="{{ route('cenrr.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('cenrr.update', $cenrr) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Product information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('employee_name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-employee_name">{{ __('EMPLOYEE NAME') }}</label>
                                    <input type="text" name="employee_name" id="input-employee_name" class="form-control form-control-alternative{{ $errors->has('employee_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('employee_name', $cenrr->employee_name) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'employee_name'])
                                </div>
                                <div class="form-group{{ $errors->has('employee_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-employee_no">{{ __('EMPLOYEE NO.') }}</label>
                                    <input type="text" name="employee_no" id="input-employee_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('employee_no', $cenrr->employee_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'employee_no'])
                                </div>
                                <div class="form-group{{ $errors->has('office') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-office">{{ __('OFFICE') }}</label>
                                    <input type="text" name="office" id="input-office" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('office', $cenrr->office) }}" required>
                                    @include('alerts.feedback', ['field' => 'office'])
                                </div>
                                <div class="form-group{{ $errors->has('division') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-division">{{ __('DIVISION') }}</label>
                                    <input type="text" name="division" id="input-division" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('division', $cenrr->division) }}" required>
                                    @include('alerts.feedback', ['field' => 'division'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">{{ __('DATE') }}</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('date', $cenrr->date) }}" required>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="form-group{{ $errors->has('unit_amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit_amount">{{ __('UNIT AMOUNT') }}</label>
                                    <input type="text" name="unit_amount" id="input-unit_amount" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('unit_amount', $cenrr->unit_amount) }}" required>
                                    @include('alerts.feedback', ['field' => 'unit_amount'])
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
