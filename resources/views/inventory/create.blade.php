@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col">
        <form method="POST" action="{{ route('inventory.store') }}" class="my-2 my-lg-0">
            <div class="card">
                <div class="card-header">
                    Add Product

                    <a href="{{ route('inventory.index')}}" class="btn btn-info float-right">Go Back</a>
                </div>
                <div class="card-body">

                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col col-md-12 col-12">
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 col-12">
                            <div class="form-group">
                                <label for="name">Quantity</label>
                                <input type="number" class="form-control" name="quantity" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 col-12">
                            <div class="form-group">
                                <label for="name">Amount</label>
                                <input type="number" class="form-control" name="amount" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col">

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">
                                    <span class="la la-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                    <span data-value="save_and_back">Add and Save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
