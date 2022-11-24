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
                <a href="{{ route('addService') }}" class="btn btn-primary">+ Add a Service</a>
            </div>
            {{-- <table class="table text-center">
                <thead>
                    <tr>
                    <th scope="col">Service Id</th>
                    <th scope="col">Package</th>
                    <th scope="col">Service</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->package_id }}</td>
                            <td>{{ $service->service }}</td>
                            <td>{{ $service->price }}</td>
                            <td class="d-flex justify-content-center form-inline">
                                <a href="{{ route('editService', $service->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('deleteService', $service->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table> --}}
        </div>
        @foreach ($packages as $package)
            <div class="border border-secondary p-4 rounded">
                <div class="d-flex justify-content-between">
                    <div style="font-size: 20px; font-weight: bold">
                        Package: {{ $package->name }} (${{ $package->price }})
                    </div>
                    <div class="mb-3 form-inline">
                        <button class="btn btn-primary btn-sm" type="button" onclick="toggleCollapse({{ $package->id }})">See Services</button>
                        <a href="{{ route('editService', $package->id) }}" class="btn btn-primary btn-sm ml-2">Edit</a>
                        <form action="{{ route('deleteService', $package->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger ml-2">Delete</button>
                        </form>
                    </div>
                </div>
                <div class="collapse" id="collapse{{ $package->id }}">
                    <div class="card card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Service</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($package->services as $service)
                                    <tr>
                                        <td>{{ $service->service }}</td>
                                        <td>${{ $service->price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
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
