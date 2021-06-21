@extends('layouts.app', ['page' => 'New Inventory Checklist', 'pageSlug' => 'checklistone-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">New Inventory Checklist</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('checklistone.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('checklistone.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('item') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-item">Item</label>
                                    <input type="text" name="item" id="input-item" class="form-control form-control-alternative{{ $errors->has('item') ? ' is-invalid' : '' }}" value="{{ old('item') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'item'])
                                </div>
                                <div class="form-group{{ $errors->has('property_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-property_no">Property No.</label>
                                    <input type="text" name="property_no" id="input-property_no" class="form-control form-control-alternative{{ $errors->has('property_no') ? ' is-invalid' : '' }}"value="{{ old('property_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'property_no'])
                                </div>
                                <div class="form-group{{ $errors->has('ics_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">ICS No.</label>
                                    <input type="text" name="ics_no" id="input-ics_no" class="form-control form-control-alternative{{ $errors->has('ics_no') ? ' is-invalid' : '' }}"value="{{ old('ics_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'ics_no'])
                                </div>
                                <div class="form-group{{ $errors->has('date_acquired') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date_acquired">Date Acquired</label>
                                    <input type="text" name="date_acquired" id="input-date_acquired" class="form-control form-control-alternative{{ $errors->has('date_acquired') ? ' is-invalid' : '' }}"value="{{ old('date_acquired') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'date_acquired'])
                                </div>
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-amount">Amount</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}" value="{{ old('amount') }}" required>
                                    @include('alerts.feedback', ['field' => 'amount'])
                                </div>
                                <div class="form-group{{ $errors->has('property_owner') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-property_owner">Property Owner</label>
                                    <input type="text" name="property_owner" id="input-property_owner" class="form-control form-control-alternative{{ $errors->has('property_owner') ? ' is-invalid' : '' }}" value="{{ old('property_owner') }}" required>
                                    @include('alerts.feedback', ['field' => 'property_owner'])
                                </div>
                                <div class="form-group{{ $errors->has('transfer_to') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-transfer_to">Transfer To</label>
                                    <input type="text" name="transfer_to" id="input-transfer_to" class="form-control form-control-alternative{{ $errors->has('transfer_to') ? ' is-invalid' : '' }}" value="{{ old('transfer_to') }}" required>
                                    @include('alerts.feedback', ['field' => 'transfer_to'])
                                </div>
                                <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-status">Status</label>
                                    <input type="text" name="status" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" value="{{ old('status') }}" required>
                                    @include('alerts.feedback', ['field' => 'status'])
                                </div>
                                <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-location">Location</label>
                                    <input type="text" name="location" id="input-location" class="form-control form-control-alternative{{ $errors->has('location') ? ' is-invalid' : '' }}" value="{{ old('location') }}" required>
                                    @include('alerts.feedback', ['field' => 'location'])
                                </div>
                                <div class="form-group{{ $errors->has('remarks') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-remarks">Remarks</label>
                                    <input type="text" name="remarks" id="input-remarks" class="form-control form-control-alternative{{ $errors->has('remarks') ? ' is-invalid' : '' }}" value="{{ old('remarks') }}" required>
                                    @include('alerts.feedback', ['field' => 'remarks'])
                                </div>
                                <div class="form-group{{ $errors->has('date_checked') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date_checked">Date Checked</label>
                                    <input type="text" name="date_checked" id="input-date_checked" class="form-control form-control-alternative{{ $errors->has('date_checked') ? ' is-invalid' : '' }}" value="{{ old('date_checked') }}" required>
                                    @include('alerts.feedback', ['field' => 'date_checked'])
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
