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
        <a href="{{ route('addPlan') }}" class="btn btn-primary">+ Add a Plan</a>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
            <th scope="col">Package Id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plans as $plan)
                <tr>
                    <td>{{ $plan->id }}</td>
                    <td>{{ $plan->name }}</td>
                    <td>${{ $plan->price }}</td>
                    <td class="d-flex justify-content-center form-inline">
                        <button class="btn btn-warning btn-sm" onclick="toggleCollapse({{ $plan->id }})">See Items</button>
                        <a href="{{ route('editPlan', $plan->id) }}" class="btn btn-primary btn-sm ml-2">Edit</a>
                        <form action="{{ route('deletePlan', $plan->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <div class="collapse" id="collapse{{ $plan->id }}">
                            <div class="card card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Plan Item</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($plan->items as $item)
                                            <tr>
                                                <td>{{  $item->item }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
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
