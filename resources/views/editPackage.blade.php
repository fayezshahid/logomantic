@extends('dashboard')

@section('content')
<style>
    #btn:hover{
        background-color: white;
        color: black;
    }
</style>
    <div class="row d-flex justify-content-center">
        <div class="col-8" style="margin-top: 30px;">
            <form action="{{ route('editPackage', $package->id) }}" method="post" id="form">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Package Name</label>
                    <input type="text" name="name" placeholder="Enter package name" class="form-control @error('name') border-3 border-danger @enderror" value="{{ $package->name }}">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Package Price</label>
                    <input type="text" name="price" placeholder="Enter package price" class="form-control @error('price') border-3 border-danger @enderror" value="{{ $package->price }}">
                    @error('price')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4" id="itemDiv">
                    <label class="form-label" style="font-weight: normal">Package items</label>
                    <?php $i = 0 ?>
                    @foreach ($package->items as $item)
                        <?php ++$i ?>
                        <div class="d-flex justify-content-between" id="item{{ $i }}">
                            <input type="text" value="{{ $item->item }}" name="item{{ $i }}" class="form-control w-75 mt-2">
                            @if($i == 1)
                            <button type="button" class="btn btn-warning" onclick="addMore()">Add More</button>
                            @else
                            <button style="height: 30px; margin-top: 15px; font-size: 12px;" type="button" class="btn btn-danger" onclick="deleteInput(this.parentNode.id)">Delete this field</button>
                            @endif
                        </div>
                    @endforeach
                    <input type="hidden" value="{{ $i }}" id="itemCount">
                    @error('item1')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div>
                    <button type="button" id="btn" class="btn btn-primary btn-block mb-4">Edit Package</button>
                </div>
            </form>
        </div>
    </div>

    @section('scripts')
        <script>
            var itemCount = $('#itemCount').val();

            function addMore(){
                itemCount++;
                $('#itemDiv').append(`
                <div class="d-flex justify-content-between" id="item${itemCount}">
                    <input type="text" name="item${itemCount}" class="form-control w-75 mt-2">
                    <button style="height: 30px; margin-top: 15px; font-size: 12px;" type="button" class="btn btn-danger" onclick="deleteInput(this.parentNode.id)">Delete this field</button>
                </div>
                `);
            }

            function deleteInput(id){
                $('#' + id).remove();
            }

            $('#btn').click(function(){
                $('#form').append(`<input type="hidden" name="itemCount" value="${itemCount}">`);
                $('#form').submit();
            })
        </script>
    @endsection
@endsection
