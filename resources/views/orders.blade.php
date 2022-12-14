@extends('dashboard')

@section('content')
<div class="products ml-3 mr-3">
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <h3>Uncompleted Orders</h3><br>
        <div class="row d-flex justify-content-between">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Name</th>
                        {{-- <th>Address</th>
                        <th>City</th>
                        <th>State</th> --}}
                        <th>Country</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        @if($order->isCompleted == 0)
                            <tr>
                                <td>{{ $order->firstName }} {{ $order->lastName }}</td>
                                {{-- <td>{{ $order->address }}</td>
                                <td>{{ $order->city }}</td>
                                <td>{{ $order->state }}</td> --}}
                                <td>{{ $order->country }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>${{ $order->amount }}</td>
                                <td class="d-flex justify-content-center">
                                    <button class="btn btn-primary mb-3" type="button" onclick="toggleCollapse({{ $order->id }})">See more</button> 
                                    <a class="btn btn-success ml-3 mb-3"  href="{{ route('orderComplete', $order->id) }}">Mark Complete</a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <div class="collapse" id="collapse{{ $order->id }}">
                                        <p><b>Address: </b>{{ $order->address }}, {{ $order->city }}, {{ $order->state }}, {{ $order->country }}</p>
                                        @if ($order->company)
                                            <p><b>Company: </b>{{ $order->company }}</p>
                                        @endif
                                        @if ($order->notes)
                                            <p><b>Note: </b>{{ $order->notes }}</p>
                                        @endif
                                        <div class="card card-body">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Logo Id</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Logo Type</th>
                                                    <th scope="col">Logo Image</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($order->carts as $cart)
                                                        <tr>
                                                            <td>{{ App\Models\Logo::where('id', $cart->logo_id)->value('id') }}</td>
                                                            <td>{{ App\Models\Logo::where('id', $cart->logo_id)->value('name') }}</td>
                                                            <td>
                                                                ${{ App\Models\Logo::where('id', $cart->logo_id)->value('price') }}
                                                            </td>
                                                            <td>{{ App\Models\Logo::where('id', $cart->logo_id)->value('logoType') }}</td>
                                                            <td>
                                                                <img src="{{ $cart->logo }}" alt="item" height="80px" width="80px" class="mx-auto">
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <br><h3>Completed Orders</h3><br>
        <div class="row d-flex justify-content-between">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Name</th>
                        {{-- <th>Address</th>
                        <th>City</th>
                        <th>State</th> --}}
                        <th>Country</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        @if($order->isCompleted == 1)
                            <tr>
                                <td>{{ $order->firstName }} {{ $order->lastName }}</td>
                                {{-- <td>{{ $order->address }}</td>
                                <td>{{ $order->city }}</td>
                                <td>{{ $order->state }}</td> --}}
                                <td>{{ $order->country }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>${{ $order->amount }}</td>
                                <td class="d-flex justify-content-center">
                                    <button class="btn btn-primary mb-3" type="button" onclick="toggleCollapse({{ $order->id }})">See more</button> 
                                    <a class="btn btn-success ml-3 mb-3"  href="{{ route('orderIncomplete', $order->id) }}">Mark Incomplete</a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <div class="collapse" id="collapse{{ $order->id }}">
                                        <p><b>Address: </b>{{ $order->address }}, {{ $order->city }}, {{ $order->state }}, {{ $order->country }}</p>
                                        @if ($order->company)
                                            <p><b>Company: </b>{{ $order->company }}</p>
                                        @endif
                                        @if ($order->notes)
                                            <p><b>Note: </b>{{ $order->notes }}</p>
                                        @endif
                                        <div class="card card-body">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Logo Id</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Logo Type</th>
                                                    <th scope="col">Logo Image</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($order->carts as $cart)
                                                        <tr>
                                                            <td>{{ App\Models\Logo::where('id', $cart->logo_id)->value('id') }}</td>
                                                            <td>{{ App\Models\Logo::where('id', $cart->logo_id)->value('name') }}</td>
                                                            <td>
                                                                ${{ App\Models\Logo::where('id', $cart->logo_id)->value('price') }}
                                                            </td>
                                                            <td>{{ App\Models\Logo::where('id', $cart->logo_id)->value('logoType') }}</td>
                                                            <td>
                                                                <img src="{{ $cart->logo }}" alt="item" height="80px" width="80px" class="mx-auto">
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        function toggleCollapse(id){
            $('#collapse' + id).toggle();
        }
    </script>
@endsection
