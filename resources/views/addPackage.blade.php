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
            <form action="{{ route('addPackage') }}" method="post" id="form">
                @csrf
                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Package Name</label>
                    <input type="text" name="name" placeholder="Enter package name" class="form-control @error('name') border-3 border-danger @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Package Price</label>
                    <input type="text" name="price" placeholder="Enter package price" class="form-control @error('price') border-3 border-danger @enderror" value="{{ old('price') }}">
                    @error('price')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4" id="itemDiv">
                    <label class="form-label" style="font-weight: normal">Package items</label>
                    <div class="d-flex justify-content-between">
                        <input type="text" name="item1" class="form-control w-75">
                        <button type="button" class="btn btn-warning" onclick="addMore()">Add More</button>
                    </div>
                    @error('item1')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div>
                    <button type="button" id="btn" class="btn btn-primary btn-block mb-4">Add Package</button>
                </div>
            </form>
        </div>
    </div>

    @section('scripts')
        <script>
            var itemCount = 1;

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
