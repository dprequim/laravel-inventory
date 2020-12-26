@extends('layouts.app', ['page' => 'New TIN', 'pageSlug' => 'routines-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">New TIN</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('routines.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('routines.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('full_name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">Full Name</label>
                                    <input type="text" name="full_name" id="input-full_name" class="form-control form-control-alternative{{ $errors->has('full_name') ? ' is-invalid' : '' }}" value="{{ old('full_name') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'full_name'])
                                </div>
                                <div class="form-group{{ $errors->has('purpose') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">Purpose</label>
                                    <input type="text" name="purpose" id="input-purpose" class="form-control form-control-alternative{{ $errors->has('purpose') ? ' is-invalid' : '' }}"value="{{ old('purpose') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'purpose'])
                                </div>
                                <div class="form-group{{ $errors->has('attachments') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">Attachments</label>
                                    <input type="text" name="attachments" id="input-attachments" class="form-control form-control-alternative{{ $errors->has('attachments') ? ' is-invalid' : '' }}"value="{{ old('attachments') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'attachments'])
                                </div>
                                <div class="form-group{{ $errors->has('date_received') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">Date Received</label>
                                    <input type="text" name="date_received" id="input-date_received" class="form-control form-control-alternative{{ $errors->has('date_received') ? ' is-invalid' : '' }}"value="{{ old('date_received') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'date_received'])
                                </div>
                                <div class="form-group{{ $errors->has('date_released') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date_released">Date Released</label>
                                    <input type="text" name="date_released" id="input-date_released" class="form-control form-control-alternative{{ $errors->has('date_released') ? ' is-invalid' : '' }}" value="{{ old('date_released') }}" required>
                                    @include('alerts.feedback', ['field' => 'date_released'])
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
