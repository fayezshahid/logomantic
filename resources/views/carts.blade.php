@extends('dashboard')

@section('content')
<div class="products ml-3 mr-3">
<div class="container">
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="row">
    <table class="table text-center">
        <thead>
            <tr>
            <th scope="col">Cart Id</th>
            <th scope="col">User Id</th>
            <th scope="col">User Name</th>
            <th scope="col">User Email</th>
            <th scope="col">Logo Id</th>
            <th scope="col">Logo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <td>{{ $cart->id }}</td>
                    <td>{{ $cart->user_id }}</td>
                    <td>{{ App\Models\User::where('id', '=', $cart->user_id)->value('name') }}</td>
                    <td>{{ App\Models\User::where('id', '=', $cart->user_id)->value('email') }}</td>
                    <td>{{ $cart->logo_id }}</td>
                    <td style="width: 300px">
                        <img src="{{ $cart->logo }}" height="250px" width="250px" alt="">
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
</div>
</div>
</div>
@endsection
