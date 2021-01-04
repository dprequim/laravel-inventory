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
                                <a href="{{ route('dv.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('dv.update', $dv) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Product information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('fund_cluster') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-fund_cluster">{{ __('FUND CLUSTER') }}</label>
                                    <input type="text" name="fund_cluster" id="input-fund_cluster" class="form-control form-control-alternative{{ $errors->has('fund_cluster') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('fund_cluster', $dv->fund_cluster) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'fund_cluster'])
                                </div>
                                <div class="form-group{{ $errors->has('employee_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-employee_no">{{ __('EMPLOYEE NO.') }}</label>
                                    <input type="text" name="employee_no" id="input-employee_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('employee_no', $dv->employee_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'employee_no'])
                                </div>
                                 <div class="form-group{{ $errors->has('bur_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-bur_no">{{ __('BUR NO.') }}</label>
                                    <input type="text" name="bur_no" id="input-bur_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('bur_no', $dv->bur_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'bur_no'])
                                </div>
                                 <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">{{ __('ADDRESS') }}</label>
                                    <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('address', $dv->address) }}" required>
                                    @include('alerts.feedback', ['field' => 'address'])
                                </div>
                                 <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">{{ __('DATE') }}</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('date', $dv->date) }}" required>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                 <div class="form-group{{ $errors->has('particular') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-particular">{{ __('PARTICULAR') }}</label>
                                    <input type="text" name="particular" id="input-particular" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('particular', $dv->particular) }}" required>
                                    @include('alerts.feedback', ['field' => 'particular'])
                                </div>
                                 <div class="form-group{{ $errors->has('responsibility_center') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-responsibility_center">{{ __('RESPONSIBILITY CENTER') }}</label>
                                    <input type="text" name="responsibility_center" id="input-responsibility_center" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('responsibility_center', $dv->responsibility_center) }}" required>
                                    @include('alerts.feedback', ['field' => 'responsibility_center'])
                                </div>
                                 <div class="form-group{{ $errors->has('mfo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-mfo">{{ __('MFO') }}</label>
                                    <input type="text" name="mfo" id="input-mfo" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('mfo', $dv->mfo) }}" required>
                                    @include('alerts.feedback', ['field' => 'mfo'])
                                </div>
                                 <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-amount">{{ __('AMOUNT') }}</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('amount', $dv->amount) }}" required>
                                    @include('alerts.feedback', ['field' => 'amount'])
                                </div>
                                 <div class="form-group{{ $errors->has('account_tittle') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-account_tittle">{{ __('ACCOUNT TITLE') }}</label>
                                    <input type="text" name="account_tittle" id="input-account_tittle" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('account_tittle', $dv->account_tittle) }}" required>
                                    @include('alerts.feedback', ['field' => 'account_tittle'])
                                </div>
                                 <div class="form-group{{ $errors->has('uacs_code') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-uacs_code">{{ __('UACS CODE') }}</label>
                                    <input type="text" name="uacs_code" id="input-uacs_code" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('uacs_code', $dv->uacs_code) }}" required>
                                    @include('alerts.feedback', ['field' => 'uacs_code'])
                                </div>
                                 <div class="form-group{{ $errors->has('debit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-debit">{{ __('DEBIT') }}</label>
                                    <input type="text" name="debit" id="input-debit" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('debit', $dv->debit) }}" required>
                                    @include('alerts.feedback', ['field' => 'debit'])
                                </div>
                                 <div class="form-group{{ $errors->has('credit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-credit">{{ __('CREDIT') }}</label>
                                    <input type="text" name="credit" id="input-credit" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('credit', $dv->credit) }}" required>
                                    @include('alerts.feedback', ['field' => 'credit'])
                                </div>
                                 <div class="form-group{{ $errors->has('cash_available') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-cash_available">{{ __('CASH AVAILABLE') }}</label>
                                    <input type="text" name="cash_available" id="input-cash_available" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('cash_available', $dv->cash_available) }}" required>
                                    @include('alerts.feedback', ['field' => 'cash_available'])
                                </div>
                                 <div class="form-group{{ $errors->has('authority_debt') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-authority_debt">{{ __('AUTHORITY DEBT') }}</label>
                                    <input type="text" name="authority_debt" id="input-authority_debt" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('authority_debt', $dv->authority_debt) }}" required>
                                    @include('alerts.feedback', ['field' => 'authority_debt'])
                                </div>
                                 <div class="form-group{{ $errors->has('support_document') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-support_document">{{ __('SUPPORT DOCUMENT') }}</label>
                                    <input type="text" name="support_document" id="input-support_document" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('support_document', $dv->support_document) }}" required>
                                    @include('alerts.feedback', ['field' => 'support_document'])
                                </div>
                                 <div class="form-group{{ $errors->has('approved_payment') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-approved_payment">{{ __('APPROVED PAYMENT') }}</label>
                                    <input type="text" name="approved_payment" id="input-approved_payment" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('approved_payment', $dv->approved_payment) }}" required>
                                    @include('alerts.feedback', ['field' => 'approved_payment'])
                                </div>
                                 <div class="form-group{{ $errors->has('check_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-check_no">{{ __('CHECK NO.') }}</label>
                                    <input type="text" name="check_no" id="input-check_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('check_no', $dv->check_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'check_no'])
                                </div>
                                 <div class="form-group{{ $errors->has('check_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-check_date">{{ __('CHECK DATE') }}</label>
                                    <input type="text" name="check_date" id="input-check_date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('check_date', $dv->check_date) }}" required>
                                    @include('alerts.feedback', ['field' => 'check_date'])
                                </div>
                                 <div class="form-group{{ $errors->has('accaount_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-accaount_no">{{ __('ACCOUNT NO.') }}</label>
                                    <input type="text" name="accaount_no" id="input-accaount_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('accaount_no', $dv->accaount_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'accaount_no'])
                                </div>
                                 <div class="form-group{{ $errors->has('signature') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-signature">{{ __('SIGNATURE') }}</label>
                                    <input type="text" name="signature" id="input-signature" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('signature', $dv->signature) }}" required>
                                    @include('alerts.feedback', ['field' => 'signature'])
                                </div>
                                 <div class="form-group{{ $errors->has('printed_name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-printed_name">{{ __('PRINTED NAME') }}</label>
                                    <input type="text" name="printed_name" id="input-printed_name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('printed_name', $dv->printed_name) }}" required>
                                    @include('alerts.feedback', ['field' => 'printed_name'])
                                </div>
                                 <div class="form-group{{ $errors->has('jev_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-jev_no">{{ __('JEV NO.') }}</label>
                                    <input type="text" name="jev_no" id="input-jev_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('jev_no', $dv->jev_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'jev_no'])
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

