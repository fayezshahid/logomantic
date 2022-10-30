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
        <a href="{{ route('addCoupon') }}" class="btn btn-primary">+ Add a Logo Coupon</a>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
            <th scope="col">Coupon Id</th>
            <th scope="col">Logo Id</th>
            <th scope="col">Discount</th>
            <th scope="col">Is Active</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coupons as $coupon)
                <tr>
                    <td>{{ $coupon->id }}</td>
                    <td>{{ $coupon->logo_id }}</td>
                    <td>{{ $coupon->discount }}%</td>
                    <td>@if($coupon->isActive == 1) Yes @else No @endif</td>
                    <td class="d-flex justify-content-center form-inline">
                        <a href="{{ route('editCoupon', $coupon->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('deleteCoupon', $coupon->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
</div>
</div>
</div>
@endsection
