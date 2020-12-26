@extends('layouts.app', ['page' => 'New TIN', 'pageSlug' => 'tin-create', 'section' => 'transactions'])

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
                                <a href="{{ route('tin.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('tin.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('company_name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">Company Name</label>
                                    <input type="text" name="company_name" id="input-company_name" class="form-control form-control-alternative{{ $errors->has('company_name') ? ' is-invalid' : '' }}"  value="{{ old('company_name') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'company_name'])
                                </div>
                                <div class="form-group{{ $errors->has('company_tin') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-company_tin">Company TIN</label>
                                    <input type="text" name="company_tin" id="input-company_tin" class="form-control form-control-alternative{{ $errors->has('company_tin') ? ' is-invalid' : '' }}" value="{{ old('company_tin') }}" required>
                                    @include('alerts.feedback', ['field' => 'company_tin'])
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
