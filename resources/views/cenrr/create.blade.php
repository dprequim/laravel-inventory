@extends('layouts.app', ['page' => 'Certification Of Expenses', 'pageSlug' => 'cenrr-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Certification Of Expenses</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('cenrr.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('cenrr.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('employee_name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-employee_name">EMPLOYEE NAME</label>
                                    <input type="text" name="employee_name" id="input-employee_name" class="form-control form-control-alternative{{ $errors->has('employee_name') ? ' is-invalid' : '' }}"  value="{{ old('employee_name') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'employee_name'])
                                </div>
                                <div class="form-group{{ $errors->has('employee_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-employee_no">EMPLOYEE NO.</label>
                                    <input type="text" name="employee_no" id="input-employee_no" class="form-control form-control-alternative{{ $errors->has('employee_no') ? ' is-invalid' : '' }}"  value="{{ old('employee_no') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'employee_no'])
                                </div>
                                <div class="form-group{{ $errors->has('office') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-office">OFFICE</label>
                                    <input type="text" name="office" id="input-office" class="form-control form-control-alternative{{ $errors->has('office') ? ' is-invalid' : '' }}"  value="{{ old('office') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'office'])
                                </div>
                                <div class="form-group{{ $errors->has('division') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-division">DIVISION</label>
                                    <input type="text" name="division" id="input-division" class="form-control form-control-alternative{{ $errors->has('division') ? ' is-invalid' : '' }}"  value="{{ old('division') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'division'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">DATE</label>
                                    <input type="text" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}"  value="{{ old('date') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'date'])
                                </div>
                                <div class="form-group{{ $errors->has('unit_amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-unit_amount">UNIT AMOUNT</label>
                                    <input type="text" name="unit_amount" id="input-unit_amount" class="form-control form-control-alternative{{ $errors->has('unit_amount') ? ' is-invalid' : '' }}"  value="{{ old('unit_amount') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'unit_amount'])
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
