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
            <th scope="col">User Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
</div>
</div>
</div>
@endsection
