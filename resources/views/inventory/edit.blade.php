@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col">
        <form method="POST" action="{{ route('inventory.update', $inventory) }}" class="my-2 my-lg-0">
            @method('put')
            <div class="card">
                <div class="card-header">
                    Update Product

                    <a href="{{ route('inventory.index')}}" class="btn btn-info float-right">Go Back</a>
                </div>
                <div class="card-body">

                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col col-md-12 col-12">
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $inventory->name }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 col-12">
                            <div class="form-group">
                                <label for="name">Quantity</label>
                                <input type="number" class="form-control" name="quantity" value="{{ $inventory->quantity }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 col-12">
                            <div class="form-group">
                                <label for="name">Amount</label>
                                <input type="number" class="form-control" name="amount" value="{{ $inventory->amount }}" required>
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
                                    <span data-value="save_and_back">Update and Save</span>
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
