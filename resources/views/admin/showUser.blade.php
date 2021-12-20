@extends('admin.master')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Users</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead align="center">
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <?php $no = 0 ?>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td align="center">{{$no++}}</td>
                    <td align="center">{{$user->name}}</td>
                    <td align="center">{{$user->email}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
