@extends('layouts.app', ['page' => __('Method Management'), 'pageSlug' => 'tin', 'section' => 'transactions'])

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
                                <a href="{{ route('tin.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('tin.update', $tin) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Product information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('company_name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-company_name">{{ __('Name') }}</label>
                                    <input type="text" name="company_name" id="input-company_name" class="form-control form-control-alternative{{ $errors->has('company_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('company_name', $tin->company_name) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'company_name'])
                                </div>
                                <div class="form-group{{ $errors->has('company_tin') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-company_tin">{{ __('Description') }}</label>
                                    <input type="text" name="company_tin" id="input-company_tin" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('company_tin', $tin->company_tin) }}" required>
                                    @include('alerts.feedback', ['field' => 'company_tin'])
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
