@extends('layouts.app', ['page' => 'Stock-out', 'pageSlug' => 'books_out-create', 'section' => 'transactions'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Stock-out</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('stockout.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('stockout.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('book_id') ? ' has-danger' : '' }}">
                                    <select style="color:gray;" name="book_id" id="input-book_id" class="form-select form-control-alternative{{ $errors->has('book_id') ? ' is-invalid' : '' }}" required>
                                        <option selected="true" disabled="disabled">Select Book Name</option>  
                                        @foreach($books as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @include('alerts.feedback', ['field' => 'book_id'])
                                </div>
                                <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-quantity">Quantity</label>
                                    <input type="text" name="quantity" id="input-quantity" class="form-control form-control-alternative{{ $errors->has('quantity') ? ' is-invalid' : '' }}" value="{{ old('quantity') }}" required>
                                    @include('alerts.feedback', ['field' => 'quantity'])
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
