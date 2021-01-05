@extends('layouts.app', ['page' => __('Method Management'), 'pageSlug' => 'obr', 'section' => 'transactions'])

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
                                <a href="{{ route('obr.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('obr.update', $obr) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Product information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('serial_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-serial_no">{{ __('Serial Number') }}</label>
                                    <input type="text" name="serial_no" id="input-serial_no" class="form-control form-control-alternative{{ $errors->has('serial_no') ? ' is-invalid' : '' }}" placeholder="{{ __('Serial Number') }}" value="{{ old('serial_no', $obr->serial_no) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'serial_no'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">{{ __('Date') }}</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Date') }}" value="{{ old('date', $obr->date) }}" required>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="form-group{{ $errors->has('fund_cluster') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-fund_cluster">{{ __('Fund Cluster') }}</label>
                                    <input type="text" name="fund_cluster" id="input-fund_cluster" class="form-control form-control-alternative{{ $errors->has('fund_cluster') ? ' is-invalid' : '' }}" placeholder="{{ __('Fund Cluster') }}" value="{{ old('fund_cluster', $obr->fund_cluster) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'fund_cluster'])
                                </div>
                                <div class="form-group{{ $errors->has('payee') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-payee">{{ __('Payee') }}</label>
                                    <input type="text" name="payee" id="input-payee" class="form-control form-control-alternative{{ $errors->has('payee') ? ' is-invalid' : '' }}" placeholder="{{ __('Payee') }}" value="{{ old('payee', $obr->payee) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'payee'])
                                </div>
                                <div class="form-group{{ $errors->has('office') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-office">{{ __('Office') }}</label>
                                    <input type="text" name="office" id="input-office" class="form-control form-control-alternative{{ $errors->has('office') ? ' is-invalid' : '' }}" placeholder="{{ __('Office') }}" value="{{ old('office', $obr->office) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'office'])
                                </div>
                                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">{{ __('Address') }}</label>
                                    <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ __('Address') }}" value="{{ old('address', $obr->address) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'address'])
                                </div>
                                <div class="form-group{{ $errors->has('responsibility_center') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-responsibility_center">{{ __('Responsibility Center') }}</label>
                                    <input type="text" name="responsibility_center" id="input-responsibility_center" class="form-control form-control-alternative{{ $errors->has('responsibility_center') ? ' is-invalid' : '' }}" placeholder="{{ __('Responsibility Center') }}" value="{{ old('responsibility_center', $obr->responsibility_center) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'responsibility_center'])
                                </div>
                                <div class="form-group{{ $errors->has('particulars') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-particulars">{{ __('Particulars') }}</label>
                                    <input type="text" name="particulars" id="input-particulars" class="form-control form-control-alternative{{ $errors->has('particulars') ? ' is-invalid' : '' }}" placeholder="{{ __('Particulars') }}" value="{{ old('particulars', $obr->particulars) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'particulars'])
                                </div>
                                <div class="form-group{{ $errors->has('pap') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-pap">{{ __('PAP') }}</label>
                                    <input type="text" name="pap" id="input-pap" class="form-control form-control-alternative{{ $errors->has('pap') ? ' is-invalid' : '' }}" placeholder="{{ __('PAP') }}" value="{{ old('pap', $obr->pap) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'pap'])
                                </div>
                                <div class="form-group{{ $errors->has('object_code') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-object_code">{{ __('Object Code') }}</label>
                                    <input type="text" name="object_code" id="input-object_code" class="form-control form-control-alternative{{ $errors->has('object_code') ? ' is-invalid' : '' }}" placeholder="{{ __('Object Code') }}" value="{{ old('object_code', $obr->object_code) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'object_code'])
                                </div>
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-amount">{{ __('Amount') }}</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}" placeholder="{{ __('obr/JEV/RCI/        RADAI/RTRAI No.') }}" value="{{ old('amount', $obr->amount) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'amount'])
                                </div>
                                <div class="form-group{{ $errors->has('refer_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-refer_date">{{ __('Reference Date') }}</label>
                                    <input type="text" name="refer_date" id="input-refer_date" class="form-control form-control-alternative{{ $errors->has('refer_date') ? ' is-invalid' : '' }}" placeholder="{{ __('Reference Date') }}" value="{{ old('refer_date', $obr->refer_date) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'refer_date'])
                                </div>
                                <div class="form-group{{ $errors->has('refer_particulars') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-refer_particulars">{{ __('Reference Parrticular') }}</label>
                                    <input type="text" name="refer_particulars" id="input-refer_particulars" class="form-control form-control-alternative{{ $errors->has('refer_particulars') ? ' is-invalid' : '' }}" placeholder="{{ __('Reference Parrticular') }}" value="{{ old('refer_particulars', $obr->refer_particulars) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'refer_particulars'])
                                </div>
                                <div class="form-group{{ $errors->has('tra_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tra_no">{{ __('ORS/JEV/Check/        ADA/TRA No.') }}</label>
                                    <input type="text" name="tra_no" id="input-tra_no" class="form-control form-control-alternative{{ $errors->has('tra_no') ? ' is-invalid' : '' }}" placeholder="{{ __('ORS/JEV/Check/        ADA/TRA No.') }}" value="{{ old('tra_no', $obr->tra_no) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'tra_no'])
                                </div>
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-amount">{{ __('Amount') }}</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}" placeholder="{{ __('Amount') }}" value="{{ old('amount', $obr->amount) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'amount'])
                                </div>
                                <div class="form-group{{ $errors->has('obligation') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-obligation">{{ __('Obligation') }}</label>
                                    <input type="text" name="obligation" id="input-obligation" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Obligation') }}" value="{{ old('obligation', $obr->obligation) }}" required>
                                    @include('alerts.feedback', ['field' => 'obligation'])
                                </div>
                                <div class="form-group{{ $errors->has('payable') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-payable">{{ __('Payable') }}</label>
                                    <input type="text" name="payable" id="input-payable" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Payable') }}" value="{{ old('payable', $obr->payable) }}" required>
                                    @include('alerts.feedback', ['field' => 'payable'])
                                </div>
                                <div class="form-group{{ $errors->has('payment') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-payment">{{ __('Payment') }}</label>
                                    <input type="text" name="payment" id="input-payment" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Payment') }}" value="{{ old('payment', $obr->payment) }}" required>
                                    @include('alerts.feedback', ['field' => 'payment'])
                                </div>
                                <div class="form-group{{ $errors->has('balance') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-balance">{{ __('Balance') }}</label>
                                    <input type="text" name="balance" id="input-balance" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Balance') }}" value="{{ old('balance', $obr->balance) }}" required>
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
