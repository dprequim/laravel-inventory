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
                                <a href="{{ route('rep.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('rep.update', $rep) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Request information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-type">{{ __('TYPE') }}</label>
                                    <input type="text" name="type" id="input-type" class="form-control form-control-alternative{{ $errors->has('type') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('type', $rep->type) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'item_no'])
                                </div>
                                <div class="form-group{{ $errors->has('engine_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-engine_no">{{ __('ENGINE NO.') }}</label>
                                    <input type="text" name="engine_no" id="input-engine_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('engine_no', $rep->engine_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'engine_no'])
                                </div>
                                <div class="form-group{{ $errors->has('acq_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-acq_date">{{ __('ACQ DATE') }}</label>
                                    <input type="text" name="acq_date" id="input-acq_date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('acq_date', $rep->acq_date) }}" required>
                                    @include('alerts.feedback', ['field' => 'acq_date'])
                                </div>
                                <div class="form-group{{ $errors->has('lastrepair_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-lastrepair_date">{{ __('LAST REPAIR DATE') }}</label>
                                    <input type="text" name="lastrepair_date" id="input-lastrepair_date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('lastrepair_date', $rep->lastrepair_date) }}" required>
                                    @include('alerts.feedback', ['field' => 'lastrepair_date'])
                                </div>
                                <div class="form-group{{ $errors->has('brand_name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-brand_name">{{ __('BRAND NAME') }}</label>
                                    <input type="text" name="brand_name" id="input-brand_name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('brand_name', $rep->brand_name) }}" required>
                                    @include('alerts.feedback', ['field' => 'brand_name'])
                                </div>
                                <div class="form-group{{ $errors->has('property_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-property_no">{{ __('PROPERTY NO') }}</label>
                                    <input type="text" name="property_no" id="input-property_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('property_no', $rep->property_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'property_no'])
                                </div>
                                <div class="form-group{{ $errors->has('acq_cost') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-acq_cost">{{ __('ACQ COST') }}</label>
                                    <input type="text" name="acq_cost" id="input-acq_cost" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('acq_cost', $rep->acq_cost) }}" required>
                                    @include('alerts.feedback', ['field' => 'acq_cost'])
                                </div>
                                <div class="form-group{{ $errors->has('last_repair') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-last_repair">{{ __('LAST REPAIR') }}</label>
                                    <input type="text" name="last_repair" id="input-last_repair" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('last_repair', $rep->last_repair) }}" required>
                                    @include('alerts.feedback', ['field' => 'last_repair'])
                                </div>
                                <div class="form-group{{ $errors->has('defects_complain') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-defects_complain">{{ __('DEFECTS COMPLAIN') }}</label>
                                    <input type="text" name="defects_complain" id="input-defects_complain" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('defects_complain', $rep->defects_complain) }}" required>
                                    @include('alerts.feedback', ['field' => 'defects_complain'])
                                </div>
                                <div class="form-group{{ $errors->has('worktobedone') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-worktobedone">{{ __('WORK TO BE DONE') }}</label>
                                    <input type="text" name="worktobedone" id="input-worktobedone" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('worktobedone', $rep->worktobedone) }}" required>
                                    @include('alerts.feedback', ['field' => 'worktobedone'])
                                </div>
                                <div class="form-group{{ $errors->has('supplied_replaced') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-supplied_replaced">{{ __('SUPPLIED REPLACED') }}</label>
                                    <input type="text" name="supplied_replaced" id="input-supplied_replaced" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('supplied_replaced', $rep->supplied_replaced) }}" required>
                                    @include('alerts.feedback', ['field' => 'supplied_replaced'])
                                </div>
                                <div class="form-group{{ $errors->has('findings') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-findings">{{ __('FINDINGS') }}</label>
                                    <input type="text" name="findings" id="input-findings" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('findings', $rep->findings) }}" required>
                                    @include('alerts.feedback', ['field' => 'findings'])
                                </div>
                                <div class="form-group{{ $errors->has('pre_inspected') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-pre_inspected">{{ __('PRE INSPECTED') }}</label>
                                    <input type="text" name="pre_inspected" id="input-pre_inspected" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('pre_inspected', $rep->pre_inspected) }}" required>
                                    @include('alerts.feedback', ['field' => 'pre_inspected'])
                                </div>
                                <div class="form-group{{ $errors->has('post_repair') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-post_repair">{{ __('POST REPAIR') }}</label>
                                    <input type="text" name="post_repair" id="input-post_repair" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('post_repair', $rep->post_repair) }}" required>
                                    @include('alerts.feedback', ['field' => 'post_repair'])
                                </div>
                                <div class="form-group{{ $errors->has('repair_shop') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-repair_shop">{{ __('REPAIR SHOP') }}</label>
                                    <input type="text" name="repair_shop" id="input-repair_shop" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('repair_shop', $rep->repair_shop) }}" required>
                                    @include('alerts.feedback', ['field' => 'repair_shop'])
                                </div>
                                <div class="form-group{{ $errors->has('joborder_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-joborder_no">{{ __('JOB ORDER NO.') }}</label>
                                    <input type="text" name="joborder_no" id="input-joborder_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('joborder_no', $rep->joborder_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'joborder_no'])
                                </div>
                                <div class="form-group{{ $errors->has('joborder_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-joborder_date">{{ __('JOB ORDER DATE') }}</label>
                                    <input type="text" name="joborder_date" id="input-joborder_date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('joborder_date', $rep->joborder_date) }}" required>
                                    @include('alerts.feedback', ['field' => 'joborder_date'])
                                </div>
                                <div class="form-group{{ $errors->has('invoice_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-invoice_no">{{ __('INVOICE NO.') }}</label>
                                    <input type="text" name="invoice_no" id="input-invoice_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('invoice_no', $rep->invoice_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'invoice_no'])
                                </div>
                                <div class="form-group{{ $errors->has('po_no') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-po_no">{{ __('PO NO.') }}</label>
                                    <input type="text" name="po_no" id="input-po_no" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('po_no', $rep->po_no) }}" required>
                                    @include('alerts.feedback', ['field' => 'po_no'])
                                </div>
                                <div class="form-group{{ $errors->has('po_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-po_date">{{ __('PO NO.') }}</label>
                                    <input type="text" name="po_date" id="input-po_date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('po_date', $rep->po_date) }}" required>
                                    @include('alerts.feedback', ['field' => 'po_date'])
                                </div>
                                <div class="form-group{{ $errors->has('amountjob_order') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-amountjob_order">{{ __('AMOUNT JOB ORDER') }}</label>
                                    <input type="text" name="amountjob_order" id="input-amountjob_order" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('amountjob_order', $rep->amountjob_order) }}" required>
                                    @include('alerts.feedback', ['field' => 'amountjob_order'])
                                </div>
                                <div class="form-group{{ $errors->has('payable_amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-payable_amount">{{ __('PAYABLE AMOUNT') }}</label>
                                    <input type="text" name="payable_amount" id="input-payable_amount" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('payable_amount', $rep->payable_amount) }}" required>
                                    @include('alerts.feedback', ['field' => 'payable_amount'])
                                </div>
                                <div class="form-group{{ $errors->has('postrepair_finding') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-postrepair_finding">{{ __('POSTREPAIR FINDING') }}</label>
                                    <input type="text" name="postrepair_finding" id="input-postrepair_finding" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('postrepair_finding', $rep->postrepair_finding) }}" required>
                                    @include('alerts.feedback', ['field' => 'postrepair_finding'])
                                </div>
                                <div class="form-group{{ $errors->has('inspected_by') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-inspected_by">{{ __('INSPECTED BY:') }}</label>
                                    <input type="text" name="inspected_by" id="input-inspected_by" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('inspected_by', $rep->inspected_by) }}" required>
                                    @include('alerts.feedback', ['field' => 'inspected_by'])
                                </div>
                                <div class="form-group{{ $errors->has('postrepair_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-postrepair_date">{{ __('POSTREPAIR DATE') }}</label>
                                    <input type="text" name="postrepair_date" id="input-postrepair_date" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('postrepair_date', $rep->postrepair_date) }}" required>
                                    @include('alerts.feedback', ['field' => 'postrepair_date'])
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
 