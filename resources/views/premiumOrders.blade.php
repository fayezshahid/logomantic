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
    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ route('addLogo') }}" class="btn btn-primary">+ Add a Logo</a>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
            <th scope="col">Order Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Logo Id</th>
            <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($premiumOrders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->premium_logo_id }}</td>
                    <td>${{ App\Models\PremiumLogo::where('id', $order->premium_logo_id)->value('price') }}</td>
                    {{-- <td>
                        <img src="{{ config('logo.logoUrl').$logo->image }}" alt="item" height="80px" width="80px" class="mx-auto">
                    </td> --}}
                    {{-- <td class="d-flex justify-content-center form-inline">
                        <a href="{{ route('editLogo', $logo->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('deleteLogo', $logo->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger ml-2">Delete</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach

        </tbody>
        </table>
</div>
</div>
</div>
@endsection
