@extends('layouts.app', ['page' => 'Disbursement Voucher', 'pageSlug' => 'dv-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Disbursement Voucher</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('dv.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('dv.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('fund_cluster') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-fund_cluster">FUND CLUSTER</label>
                                    <input type="text" name="fund_cluster" id="input-fund_cluster" class="form-control form-control-alternative{{ $errors->has('fund_cluster') ? ' is-invalid' : '' }}"  value="{{ old('fund_cluster') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'fund_cluster'])
                                </div>
                                <div class="form-group{{ $errors->has('employee_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-employee_no">EMPLOYEE NO.</label>
                                    <input type="text" name="employee_no" id="input-employee_no" class="form-control form-control-alternative{{ $errors->has('employee_no') ? ' is-invalid' : '' }}"  value="{{ old('employee_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'employee_no'])
                                </div>
                                <div class="form-group{{ $errors->has('bur_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-bur_no">BUR NO.</label>
                                    <input type="text" name="bur_no" id="input-bur_no" class="form-control form-control-alternative{{ $errors->has('bur_no') ? ' is-invalid' : '' }}"  value="{{ old('bur_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'bur_no'])
                                </div>
                                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">ADDRESS</label>
                                    <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}"  value="{{ old('address') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'address'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">DATE</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}"  value="{{ old('date') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="form-group{{ $errors->has('particular') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-particular">PARTICULAR</label>
                                    <input type="text" name="particular" id="input-particular" class="form-control form-control-alternative{{ $errors->has('particular') ? ' is-invalid' : '' }}"  value="{{ old('particular') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'particular'])
                                </div>
                                <div class="form-group{{ $errors->has('responsibility_center') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-responsibility_center">RESPONSIBILITY CENTER</label>
                                    <input type="text" name="responsibility_center" id="input-responsibility_center" class="form-control form-control-alternative{{ $errors->has('responsibility_center') ? ' is-invalid' : '' }}"  value="{{ old('responsibility_center') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'responsibility_center'])
                                </div>
                                <div class="form-group{{ $errors->has('mfo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-mfo">MFO</label>
                                    <input type="text" name="mfo" id="input-mfo" class="form-control form-control-alternative{{ $errors->has('mfo') ? ' is-invalid' : '' }}"  value="{{ old('mfo') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'mfo'])
                                </div>
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-amount">AMOUNT</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}"  value="{{ old('amount') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'amount'])
                                </div>
                                <div class="form-group{{ $errors->has('account_tittle') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-account_tittle">ACCOUNT TITLE</label>
                                    <input type="text" name="account_tittle" id="input-account_tittle" class="form-control form-control-alternative{{ $errors->has('account_tittle') ? ' is-invalid' : '' }}"  value="{{ old('account_tittle') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'account_tittle'])
                                </div>
                                <div class="form-group{{ $errors->has('uacs_code') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-uacs_code">UACS CODE</label>
                                    <input type="text" name="uacs_code" id="input-uacs_code" class="form-control form-control-alternative{{ $errors->has('uacs_code') ? ' is-invalid' : '' }}"  value="{{ old('uacs_code') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'uacs_code'])
                                </div>
                                <div class="form-group{{ $errors->has('debit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-debit">DEBIT</label>
                                    <input type="text" name="debit" id="input-debit" class="form-control form-control-alternative{{ $errors->has('debit') ? ' is-invalid' : '' }}"  value="{{ old('debit') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'debit'])
                                </div>
                                <div class="form-group{{ $errors->has('credit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-credit">CREDIT</label>
                                    <input type="text" name="credit" id="input-credit" class="form-control form-control-alternative{{ $errors->has('credit') ? ' is-invalid' : '' }}"  value="{{ old('credit') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'credit'])
                                </div>
                                <div class="form-group{{ $errors->has('cash_available') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-cash_available">CASH AVAILABLE</label>
                                    <input type="text" name="cash_available" id="input-cash_available" class="form-control form-control-alternative{{ $errors->has('cash_available') ? ' is-invalid' : '' }}"  value="{{ old('cash_available') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'cash_available'])
                                </div>
                                <div class="form-group{{ $errors->has('authority_debt') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-authority_debt">AUTHORITY DEBT</label>
                                    <input type="text" name="authority_debt" id="input-authority_debt" class="form-control form-control-alternative{{ $errors->has('authority_debt') ? ' is-invalid' : '' }}"  value="{{ old('authority_debt') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'authority_debt'])
                                </div>
                                <div class="form-group{{ $errors->has('support_document') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-support_document">SUPPORT DOCUMENT</label>
                                    <input type="text" name="support_document" id="input-support_document" class="form-control form-control-alternative{{ $errors->has('support_document') ? ' is-invalid' : '' }}"  value="{{ old('support_document') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'support_document'])
                                </div>
                                <div class="form-group{{ $errors->has('approved_payment') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-approved_payment">APPROVED PAYMENT</label>
                                    <input type="text" name="approved_payment" id="input-approved_payment" class="form-control form-control-alternative{{ $errors->has('approved_payment') ? ' is-invalid' : '' }}"  value="{{ old('approved_payment') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'approved_payment'])
                                </div>
                                <div class="form-group{{ $errors->has('check_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-check_no">CHECK NO.</label>
                                    <input type="text" name="check_no" id="input-check_no" class="form-control form-control-alternative{{ $errors->has('check_no') ? ' is-invalid' : '' }}"  value="{{ old('check_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'check_no'])
                                </div>
                                <div class="form-group{{ $errors->has('check_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-check_date">CHECK DATE</label>
                                    <input type="text" name="check_date" id="input-check_date" class="form-control form-control-alternative{{ $errors->has('check_date') ? ' is-invalid' : '' }}"  value="{{ old('check_date') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'check_date'])
                                </div>
                                <div class="form-group{{ $errors->has('accaount_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-accaount_no">ACCOUNT NO.</label>
                                    <input type="text" name="accaount_no" id="input-accaount_no" class="form-control form-control-alternative{{ $errors->has('accaount_no') ? ' is-invalid' : '' }}"  value="{{ old('accaount_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'accaount_no'])
                                </div>
                                <div class="form-group{{ $errors->has('signature') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-signature">SIGNATURE</label>
                                    <input type="text" name="signature" id="input-signature" class="form-control form-control-alternative{{ $errors->has('signature') ? ' is-invalid' : '' }}"  value="{{ old('signature') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'signature'])
                                </div>
                                <div class="form-group{{ $errors->has('printed_name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-printed_name">PRINTED NAME</label>
                                    <input type="text" name="printed_name" id="input-printed_name" class="form-control form-control-alternative{{ $errors->has('printed_name') ? ' is-invalid' : '' }}"  value="{{ old('printed_name') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'printed_name'])
                                </div>
                                <div class="form-group{{ $errors->has('jev_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-jev_no">JEV NO.</label>
                                    <input type="text" name="jev_no" id="input-jev_no" class="form-control form-control-alternative{{ $errors->has('jev_no') ? ' is-invalid' : '' }}"  value="{{ old('jev_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'jev_no'])
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
