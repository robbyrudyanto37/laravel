@extends('admin.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Cart</h1>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <form action="{{route('addCart')}}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>User</label>
                <select name="idUser" class="form-control">

                    <option value="">-</option>

                </select>

            </div>
            <div class="form-group col-md-6">
                <label>Product</label>
                <select name="idProduct" class="form-control">
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->productName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label>Qty</label>
                <input type="number" class="form-control" name="qty">
            </div>
            <div class="form-group col-md-3">
                <label>Total Price</label>
                <input type="number" class="form-control" name="totalPrice">
            </div>
        </div>
        <div class="form-group col-md-5">
            <label>Status</label>
            <input type="text" class="form-control" name="status">
        </div>


        <button type="submit" class="btn btn-primary">Add</button>
    </form>

@endsection
