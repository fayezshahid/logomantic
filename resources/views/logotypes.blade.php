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
            <form action="{{ route('addLogoType') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input name="name" type="text" class="form-control" placeholder="Enter name">
                    <button class="btn btn-primary ml-2">+ Add a Logo Type</button>
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
                        <th scope="col">Name of Logos added</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logoTypes as $logoType)
                        <tr>
                            <td>{{ $logoType->id }}</td>
                            <td>{{ $logoType->name }}</td>
                            <td>
                                <form action="{{ route('deleteLogoType', $logoType->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete Logo Type</button>
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
