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
        <a href="{{ route('addDesign') }}" class="btn btn-primary">+ Add a Design Card</a>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Design Category</th>
            <th scope="col">Logo Image</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($designs as $design)
                <tr>
                    <td>{{ $design->id }}</td>
                    <td>{{ $design->name }}</td>
                    <td>{{ $design->description }}</td>
                    <td>{{ $design->price }}</td>
                    <td>{{ $design->designCategory }}</td>
                    <td>
                        <img src="{{ config('logo.logoUrl').$design->image }}" alt="item" height="80px" width="80px" class="mx-auto">
                    </td>
                    <td class="d-flex justify-content-center form-inline">
                        <a href="{{ route('editDesign', $design->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('deleteDesign', $design->id) }}" method="post">
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
