@extends('admin.master')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Cart</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead align="center">
            <th>No</th>
            <th>User</th>
            <th>Product</th>
            <th>Qty</th>
            <th>Status</th>
            <th>Total Price</th>
            <?php $no = 0 ?>
            </thead>
            <tbody>
            @foreach($cart as $cart_temp)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td align="center">{{$cart_temp->idUser}}</td>
                    <td align="center">{{$cart_temp->idProduct}}</td>
                    <td align="center">{{$cart_temp->qty}}</td>
                    <td align="center">{{$cart_temp->status}}</td>
                    <td align="center">{{$cart_temp->totalPrice}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
