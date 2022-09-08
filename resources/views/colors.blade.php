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
            <form action="{{ route('addColor') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input name="name" type="text" class="form-control" placeholder="Enter the color">
                    <button class="btn btn-primary ml-2">+ Add a color</button>
                </div>
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </form>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Sr.no</th>
                        <th scope="col">Colors Available</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($colors as $color)
                        <tr>
                            <td>{{ $color->id }}</td>
                            <td>{{ $color->name }}</td>
                            <td>
                                <form action="{{ route('deleteColor', $color->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete Color</button>
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
