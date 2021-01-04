@extends('layouts.app', ['page' => __('Method Management'), 'pageSlug' => 'bur', 'section' => 'transactions'])

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
                                <a href="{{ route('burs.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('burs.update', $bur) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Product information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('serial_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-serial_no">{{ __('Serial Number') }}</label>
                                    <input type="text" name="serial_no" id="input-serial_no" class="form-control form-control-alternative{{ $errors->has('serial_no') ? ' is-invalid' : '' }}" placeholder="{{ __('Serial Number') }}" value="{{ old('serial_no', $bur->serial_no) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'serial_no'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">{{ __('Date') }}</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Date') }}" value="{{ old('date', $bur->date) }}" required>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="form-group{{ $errors->has('funcluster') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-funcluster">{{ __('Fund Cluster') }}</label>
                                    <input type="text" name="funcluster" id="input-funcluster" class="form-control form-control-alternative{{ $errors->has('funcluster') ? ' is-invalid' : '' }}" placeholder="{{ __('Fund Cluster') }}" value="{{ old('funcluster', $bur->funcluster) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'funcluster'])
                                </div>
                                <div class="form-group{{ $errors->has('responsibility_center') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-responsibility_center">{{ __('Responsibility Center') }}</label>
                                    <input type="text" name="responsibility_center" id="input-responsibility_center" class="form-control form-control-alternative{{ $errors->has('responsibility_center') ? ' is-invalid' : '' }}" placeholder="{{ __('Responsibility Center') }}" value="{{ old('responsibility_center', $bur->responsibility_center) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'responsibility_center'])
                                </div>
                                <div class="form-group{{ $errors->has('particulars') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-particulars">{{ __('Particulars') }}</label>
                                    <input type="text" name="particulars" id="input-particulars" class="form-control form-control-alternative{{ $errors->has('particulars') ? ' is-invalid' : '' }}" placeholder="{{ __('Particulars') }}" value="{{ old('particulars', $bur->particulars) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'particulars'])
                                </div>
                                <div class="form-group{{ $errors->has('mfo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-mfo">{{ __('MFO') }}</label>
                                    <input type="text" name="mfo" id="input-mfo" class="form-control form-control-alternative{{ $errors->has('mfo') ? ' is-invalid' : '' }}" placeholder="{{ __('MFO') }}" value="{{ old('mfo', $bur->mfo) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'mfo'])
                                </div>
                                <div class="form-group{{ $errors->has('expenditures') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-expenditures">{{ __('Expenditures') }}</label>
                                    <input type="text" name="expenditures" id="input-expenditures" class="form-control form-control-alternative{{ $errors->has('expenditures') ? ' is-invalid' : '' }}" placeholder="{{ __('Expenditures') }}" value="{{ old('expenditures', $bur->expenditures) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'expenditures'])
                                </div>
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-amount">{{ __('Amount') }}</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}" placeholder="{{ __('Amount') }}" value="{{ old('amount', $bur->amount) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'amount'])
                                </div>
                                <div class="form-group{{ $errors->has('refer_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-refer_date">{{ __('Reference Date') }}</label>
                                    <input type="text" name="refer_date" id="input-refer_date" class="form-control form-control-alternative{{ $errors->has('refer_date') ? ' is-invalid' : '' }}" placeholder="{{ __('Reference Date') }}" value="{{ old('refer_date', $bur->refer_date) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'refer_date'])
                                </div>
                                <div class="form-group{{ $errors->has('refer_partocular') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-refer_partocular">{{ __('Reference Particular') }}</label>
                                    <input type="text" name="refer_partocular" id="input-refer_partocular" class="form-control form-control-alternative{{ $errors->has('refer_partocular') ? ' is-invalid' : '' }}" placeholder="{{ __('Reference Particular') }}" value="{{ old('refer_partocular', $bur->refer_partocular) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'refer_partocular'])
                                </div>
                                <div class="form-group{{ $errors->has('rtrai_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-rtrai_no">{{ __('BURS/JEV/RCI/        RADAI/RTRAI No.') }}</label>
                                    <input type="text" name="rtrai_no" id="input-rtrai_no" class="form-control form-control-alternative{{ $errors->has('rtrai_no') ? ' is-invalid' : '' }}" placeholder="{{ __('BURS/JEV/RCI/        RADAI/RTRAI No.') }}" value="{{ old('rtrai_no', $bur->rtrai_no) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'rtrai_no'])
                                </div>
                                <div class="form-group{{ $errors->has('utilization') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-utilization">{{ __('Utilization') }}</label>
                                    <input type="text" name="utilization" id="input-utilization" class="form-control form-control-alternative{{ $errors->has('utilization') ? ' is-invalid' : '' }}" placeholder="{{ __('Utilization') }}" value="{{ old('utilization', $bur->utilization) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'utilization'])
                                </div>
                                <div class="form-group{{ $errors->has('payable') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-payable">{{ __('Payable') }}</label>
                                    <input type="text" name="payable" id="input-payable" class="form-control form-control-alternative{{ $errors->has('payable') ? ' is-invalid' : '' }}" placeholder="{{ __('Payable') }}" value="{{ old('payable', $bur->payable) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'payable'])
                                </div>
                                <div class="form-group{{ $errors->has('payment') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-payment">{{ __('Payment') }}</label>
                                    <input type="text" name="payment" id="input-payment" class="form-control form-control-alternative{{ $errors->has('payment') ? ' is-invalid' : '' }}" placeholder="{{ __('Payment') }}" value="{{ old('payment', $bur->payment) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'payment'])
                                </div>
                                <div class="form-group{{ $errors->has('balance') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-balance">{{ __('Balance') }}</label>
                                    <input type="text" name="balance" id="input-balance" class="form-control form-control-alternative{{ $errors->has('balance') ? ' is-invalid' : '' }}" placeholder="{{ __('Balance') }}" value="{{ old('balance', $bur->balance) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'balance'])
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
