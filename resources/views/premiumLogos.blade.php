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
        <a href="{{ route('addPremiumLogo') }}" class="btn btn-primary">+ Add a Premium Logo</a>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
            <th scope="col">Logo Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Logo Type</th>
            <th scope="col">Logo Image</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logos as $logo)
                <tr>
                    <td>{{ $logo->id }}</td>
                    <td>{{ $logo->name }}</td>
                    <td>{{ $logo->description }}</td>
                    <td>${{ $logo->price }}</td>
                    <td>{{ $logo->logoType }}</td>
                    <td>
                        <img src="{{ config('logo.logoUrl').$logo->image }}" alt="item" height="80px" width="80px" class="mx-auto">
                    </td>
                    <td class="d-flex justify-content-center form-inline">
                        <a href="{{ route('editPremiumLogo', $logo->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('deletePremiumLogo', $logo->id) }}" method="post">
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
