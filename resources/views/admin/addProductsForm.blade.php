@extends('admin.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Products</h1>
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

    <form action="{{route('addProducts')}}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Product Name</label>
                <input type="text" class="form-control" name="productName" placeholder="Product Name">
            </div>
            <div class="form-group col-md-6">
                <label>Product Category</label>
                <input type="text" class="form-control" name="productCategory" placeholder="Product Category">
            </div>
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="desc" placeholder="Description">
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label>Stock</label>
                <input type="number" class="form-control" name="stock">
            </div>
            <div class="form-group col-md-3">
                <label>Price</label>
                <input type="number" class="form-control" name="price">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>

@endsection
