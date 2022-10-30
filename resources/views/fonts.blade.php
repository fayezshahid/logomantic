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
            <form action="{{ route('addFont') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input name="names[]" type="file" class="form-control" multiple>
                    <button class="btn btn-primary ml-2">+ Add Fonts</button>
                </div>
                @if(session('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
            </form>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Font Id</th>
                        <th scope="col">Font names</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fonts as $font)
                        <tr>
                            <td>{{ $font->id }}</td>
                            <td>{{ $font->name }}</td>
                            <td>
                                <form action="{{ route('deleteFont', $font->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete Font</button>
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
