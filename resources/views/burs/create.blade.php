@extends('layouts.app', ['page' => 'New UtilizationRequest', 'pageSlug' => 'burs-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">NEW UTILIZATION REQUEST</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('burs.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
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
                                <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('funcluster') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">FUND CLUSTER</label>
                                    <input type="text" name="funcluster" id="input-funcluster" class="form-control form-control-alternative{{ $errors->has('funcluster') ? ' is-invalid' : '' }}"  value="{{ old('funcluster') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'funcluster'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('responsibility_center') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">RESPONSIBILITY CENTER</label>
                                    <input type="text" name="responsibility_center" id="input-responsibility_center" class="form-control form-control-alternative{{ $errors->has('responsibility_center') ? ' is-invalid' : '' }}"  value="{{ old('responsibility_center') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'responsibility_center'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('particulars') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">PARTICULARS</label>
                                    <input type="text" name="particulars" id="input-particulars" class="form-control form-control-alternative{{ $errors->has('particulars') ? ' is-invalid' : '' }}"  value="{{ old('particulars') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'particulars'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('mfo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">MFO</label>
                                    <input type="text" name="mfo" id="input-mfo" class="form-control form-control-alternative{{ $errors->has('mfo') ? ' is-invalid' : '' }}"  value="{{ old('mfo') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'mfo'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('expenditures') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">EXPENDITURES</label>
                                    <input type="text" name="expenditures" id="input-expenditures" class="form-control form-control-alternative{{ $errors->has('expenditures') ? ' is-invalid' : '' }}"  value="{{ old('expenditures') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'expenditures'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">AMOUNT</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}"  value="{{ old('amount') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'amount'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('refer_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">REFERENCE DATE</label>
                                    <input type="text" name="refer_date" id="input-refer_date" class="form-control form-control-alternative{{ $errors->has('refer_date') ? ' is-invalid' : '' }}"  value="{{ old('refer_date') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'refer_date'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('refer_partocular') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">REFERENCE PARTICULAR</label>
                                    <input type="text" name="refer_partocular" id="input-refer_partocular" class="form-control form-control-alternative{{ $errors->has('refer_partocular') ? ' is-invalid' : '' }}"  value="{{ old('refer_partocular') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'refer_partocular'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('rtrai_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">BURS/JEV/RCI/  RADAI/RTRAI No.</label>
                                    <input type="text" name="rtrai_no" id="input-rtrai_no" class="form-control form-control-alternative{{ $errors->has('rtrai_no') ? ' is-invalid' : '' }}"  value="{{ old('rtrai_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'rtrai_no'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('utilization') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">UTILIZATION</label>
                                    <input type="text" name="utilization" id="input-utilization" class="form-control form-control-alternative{{ $errors->has('utilization') ? ' is-invalid' : '' }}"  value="{{ old('utilization') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'utilization'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('payable') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">PAYABLE</label>
                                    <input type="text" name="payable" id="input-payable" class="form-control form-control-alternative{{ $errors->has('payable') ? ' is-invalid' : '' }}"  value="{{ old('payable') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'payable'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('payment') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">PAYMENT</label>
                                    <input type="text" name="payment" id="input-payment" class="form-control form-control-alternative{{ $errors->has('payment') ? ' is-invalid' : '' }}"  value="{{ old('payment') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'payment'])
                                </div>
                                <div class="card-body">
                        <form method="post" action="{{ route('burs.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
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
