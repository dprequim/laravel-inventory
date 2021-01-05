@extends('layouts.app', ['page' => 'New ObligationStatus', 'pageSlug' => 'obr-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">NEW OBLIGATION REQUEST AND STATUS</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('obr.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('obr.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('serial_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">SERIAL NO.</label>
                                    <input type="text" name="serial_no" id="input-serial_no" class="form-control form-control-alternative{{ $errors->has('serial_no') ? ' is-invalid' : '' }}"  value="{{ old('serial_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'serial_no'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">DATE</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}" value="{{ old('date') }}" required>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="form-group{{ $errors->has('fund_cluster') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">FUND CLUSTER</label>
                                    <input type="text" name="fund_cluster" id="input-fund_cluster" class="form-control form-control-alternative{{ $errors->has('fund_cluster') ? ' is-invalid' : '' }}"  value="{{ old('fund_cluster') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'fund_cluster'])
                                </div>
                                <div class="form-group{{ $errors->has('payee') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">PAYEE</label>
                                    <input type="text" name="payee" id="input-payee" class="form-control form-control-alternative{{ $errors->has('payee') ? ' is-invalid' : '' }}"  value="{{ old('payee') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'payee'])
                                </div>
                                <div class="form-group{{ $errors->has('office') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">OFFICE</label>
                                    <input type="text" name="office" id="input-office" class="form-control form-control-alternative{{ $errors->has('office') ? ' is-invalid' : '' }}"  value="{{ old('office') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'office'])
                                </div>
                                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">ADDRESS</label>
                                    <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}"  value="{{ old('address') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'address'])
                                </div>
                                <div class="form-group{{ $errors->has('responsibility_center') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">RESPONSIBILITY CENTER</label>
                                    <input type="text" name="responsibility_center" id="input-responsibility_center" class="form-control form-control-alternative{{ $errors->has('responsibility_center') ? ' is-invalid' : '' }}"  value="{{ old('responsibility_center') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'responsibility_center'])
                                </div>
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">AMOUNT</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}"  value="{{ old('amount') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'amount'])
                                </div>
                                <div class="form-group{{ $errors->has('particulars') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">PARTICULARS</label>
                                    <input type="text" name="particulars" id="input-particulars" class="form-control form-control-alternative{{ $errors->has('particulars') ? ' is-invalid' : '' }}"  value="{{ old('particulars') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'particulars'])
                                </div>
                                <div class="form-group{{ $errors->has('pap') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">PAP</label>
                                    <input type="text" name="pap" id="input-pap" class="form-control form-control-alternative{{ $errors->has('pap') ? ' is-invalid' : '' }}"  value="{{ old('pap') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'pap'])
                                </div>
                                <div class="form-group{{ $errors->has('object_code') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">OBJECT CODE</label>
                                    <input type="text" name="object_code" id="input-object_code" class="form-control form-control-alternative{{ $errors->has('object_code') ? ' is-invalid' : '' }}"  value="{{ old('object_code') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'object_code'])
                                </div>
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">AMOUNT</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}"  value="{{ old('amount') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'amount'])
                                </div>
                                <div class="form-group{{ $errors->has('refer_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">REFERENCE DATE</label>
                                    <input type="text" name="refer_date" id="input-refer_date" class="form-control form-control-alternative{{ $errors->has('refer_date') ? ' is-invalid' : '' }}"  value="{{ old('refer_date') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'refer_date'])
                                </div>
                                <div class="form-group{{ $errors->has('refer_particulars') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">REFERENCE PARTICULARS</label>
                                    <input type="text" name="refer_particulars" id="input-refer_particulars" class="form-control form-control-alternative{{ $errors->has('refer_particulars') ? ' is-invalid' : '' }}"  value="{{ old('refer_particulars') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'refer_particulars'])
                                </div>
                                <div class="form-group{{ $errors->has('tra_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">ORS/JEV/Check/        ADA/TRA No.</label>
                                    <input type="text" name="tra_no" id="input-tra_no" class="form-control form-control-alternative{{ $errors->has('tra_no') ? ' is-invalid' : '' }}"  value="{{ old('tra_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'tra_no'])
                                </div>
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">.AMOUNT</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}"  value="{{ old('amount') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'amount'])
                                </div>
                                <div class="form-group{{ $errors->has('obligation') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">OBLIGATION</label>
                                    <input type="text" name="obligation" id="input-obligation" class="form-control form-control-alternative{{ $errors->has('obligation') ? ' is-invalid' : '' }}"  value="{{ old('obligation') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'obligation'])
                                </div>
                                <div class="form-group{{ $errors->has('payable') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">PAYABLE</label>
                                    <input type="text" name="payable" id="input-payable" class="form-control form-control-alternative{{ $errors->has('payable') ? ' is-invalid' : '' }}"  value="{{ old('payable') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'payable'])
                                </div>
                                <div class="form-group{{ $errors->has('payment') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">PAYMENT</label>
                                    <input type="text" name="payment" id="input-payment" class="form-control form-control-alternative{{ $errors->has('payment') ? ' is-invalid' : '' }}"  value="{{ old('payment') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'payment'])
                                </div>
                                <div class="form-group{{ $errors->has('balance') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">BALANCE</label>
                                    <input type="text" name="balance" id="input-balance" class="form-control form-control-alternative{{ $errors->has('balance') ? ' is-invalid' : '' }}"  value="{{ old('balance') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'balance'])
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
