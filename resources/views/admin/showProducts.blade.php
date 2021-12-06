@extends('admin.master')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Products</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead align="center">
            <th>No</th>
            <th>Product Name</th>
            <th>Product Category</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Price</th>
            <?php $no = 0 ?>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td align="center">{{$product->productName}}</td>
                    <td align="center">{{$product->productCategory}}</td>
                    <td align="center">{{$product->desc}}</td>
                    <td align="center">{{$product->stock}}</td>
                    <td align="center">{{$product->price}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
