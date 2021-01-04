@extends('layouts.app', ['page' => 'Transfer Report', 'pageSlug' => 'ptr-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Transfer Report</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('ptr.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('ptr.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('fund_cluster') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-fund_cluster">FUND CLUSTER</label>
                                    <input type="text" name="fund_cluster" id="input-fund_cluster" class="form-control form-control-alternative{{ $errors->has('fund_cluster') ? ' is-invalid' : '' }}"  value="{{ old('fund_cluster') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'fund_cluster'])
                                </div>
                                <div class="form-group{{ $errors->has('from_officer') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-from_officer">FROM OFFICER</label>
                                    <input type="text" name="from_officer" id="input-from_officer" class="form-control form-control-alternative{{ $errors->has('from_officer') ? ' is-invalid' : '' }}"  value="{{ old('from_officer') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'from_officer'])
                                </div>
                                <div class="form-group{{ $errors->has('to_officer') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-to_officer">TO OFFICER</label>
                                    <input type="text" name="to_officer" id="input-to_officer" class="form-control form-control-alternative{{ $errors->has('to_officer') ? ' is-invalid' : '' }}"  value="{{ old('to_officer') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'to_officer'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">DATE</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}"  value="{{ old('date') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="form-group{{ $errors->has('transfer_type') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-transfer_type">TRANSFER TYPE</label>
                                    <input type="text" name="transfer_type" id="input-transfer_type" class="form-control form-control-alternative{{ $errors->has('transfer_type') ? ' is-invalid' : '' }}"  value="{{ old('transfer_type') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'transfer_type'])
                                </div>
                                <div class="form-group{{ $errors->has('acquired_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-acquired_date">AQUIRED DATE</label>
                                    <input type="text" name="acquired_date" id="input-acquired_date" class="form-control form-control-alternative{{ $errors->has('acquired_date') ? ' is-invalid' : '' }}"  value="{{ old('acquired_date') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'acquired_date'])
                                </div>
                                <div class="form-group{{ $errors->has('property_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-property_no">PROPERTY NO.</label>
                                    <input type="text" name="property_no" id="input-property_no" class="form-control form-control-alternative{{ $errors->has('property_no') ? ' is-invalid' : '' }}"  value="{{ old('property_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'property_no'])
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-description">DESCRIPTION</label>
                                    <input type="text" name="description" id="input-description" class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description') }}" required>
                                    @include('alerts.feedback', ['field' => 'description'])
                                </div>
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-amount">AMOUNT</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}" value="{{ old('amount') }}" required>
                                    @include('alerts.feedback', ['field' => 'amount'])
                                </div>
                                <div class="form-group{{ $errors->has('ppe_condition') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-ppe_condition">PPE CONDITION</label>
                                    <input type="text" name="ppe_condition" id="input-ppe_condition" class="form-control form-control-alternative{{ $errors->has('ppe_condition') ? ' is-invalid' : '' }}" value="{{ old('ppe_condition') }}" required>
                                    @include('alerts.feedback', ['field' => 'ppe_condition'])
                                </div>
                                <div class="form-group{{ $errors->has('transfer_reason') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-transfer_reason">TRNSFER REASON</label>
                                    <input type="text" name="transfer_reason" id="input-transfer_reason" class="form-control form-control-alternative{{ $errors->has('transfer_reason') ? ' is-invalid' : '' }}" value="{{ old('transfer_reason') }}" required>
                                    @include('alerts.feedback', ['field' => 'transfer_reason'])
                                </div>
                                <div class="form-group{{ $errors->has('signature') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-signature">SIGNATURE</label>
                                    <input type="text" name="signature" id="input-signature" class="form-control form-control-alternative{{ $errors->has('signature') ? ' is-invalid' : '' }}" value="{{ old('signature') }}" required>
                                    @include('alerts.feedback', ['field' => 'signature'])
                                </div>
                                <div class="form-group{{ $errors->has('printed_name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-printed_name">PRINTED NAME</label>
                                    <input type="text" name="printed_name" id="input-printed_name" class="form-control form-control-alternative{{ $errors->has('printed_name') ? ' is-invalid' : '' }}" value="{{ old('printed_name') }}" required>
                                    @include('alerts.feedback', ['field' => 'printed_name'])
                                </div>
                                <div class="form-group{{ $errors->has('designation') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-designation">DESIGNATION</label>
                                    <input type="text" name="designation" id="input-designation" class="form-control form-control-alternative{{ $errors->has('designation') ? ' is-invalid' : '' }}" value="{{ old('designation') }}" required>
                                    @include('alerts.feedback', ['field' => 'designation'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">DATE</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}" value="{{ old('date') }}" required>
                                    @include('alerts.feedback', ['field' => 'date'])
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
 