@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->get('danger'))
            <div class="alert alert-danger">
                {{ session()->get('danger') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                List of products
                <a href="{{ route('inventory.create')}}" class="btn btn-info float-right">Add product</a>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @if(count($inventories) > 0)
                                    @foreach ($inventories as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->amount }}</td>
                                        <td>
                                            <a href="{{ route('inventory.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form method="POST" action="{{ route('inventory.delete', $product) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="5">No Data</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
