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
            <form id="form" action="{{ route('editDesign', $design->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Design Card Name</label>
                    <input type="text" name="name" class="form-control @error('name') border-3 border-danger @enderror" value="{{ $design->name }}">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Design Card Description</label>
                    <input type="text" name="description" class="form-control @error('description') border-3 border-danger @enderror" value="{{ $design->description }}">
                    @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Design Card Price</label>
                    <input type="text" name="price" class="form-control @error('price') border-3 border-danger @enderror" value="{{ $design->price }}">
                    @error('price')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Design Category</label>
                    <select class="form-control @error('designCategory') border-3 border-danger @enderror" style="width: 100%" name="designCategory" value="{{ $design->designCategory }}">
                        <option disabled>Select a design category</option>
                        @foreach ($designCategories as $designCategory)
                            <option value="{{ $designCategory->name }}" @if($designCategory->name == $design->designCategory) selected @endif>{{ $designCategory->name }}</option>
                        @endforeach
                    </select>
                    @error('designCategory')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4" id="chooseImg" style="display: none">
                    <label class="form-label" style="font-weight: normal">Design Card Image</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') border-3 border-danger @enderror" onchange="displayImage(this);" value="{{ $design->image }}">
                    @error('image')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between" id="imageDiv">
                    <img id="img" src="{{ config('logo.logoUrl').$design->image }}" width="350px" height="350px">
                    <span id="close" onclick="closeImage()" style="cursor: pointer; height: 5px;">x</span>
                </div>
                
                <div>
                    <button type="button" id="btn" class="btn btn-primary btn-block mb-4">Update Design Card</button>
                </div>
            </form>
        </div>
    </div>  

    @section('scripts')
        <script>
            var flag = 0;

            $('#btn').click(function(){
                if(flag == 0){
                    $('#chooseImg').html('<input type="hidden" name="hiddenToken" value="1">');
                }
                $('#form').submit();
            });

            function displayImage(input) {
                if (input.files && input.files[0]) {

                    $('#chooseImg').hide();

                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#img')
                            .attr('src', e.target.result)
                            .width(350)
                            .height(350);
                    };

                    reader.readAsDataURL(input.files[0]);
                    
                    $('#imageDiv').css('margin-top', '40px');
                    $('#imageDiv').css('margin-bottom', '1.5rem');
                    $('#img').show();
                    $('#close').show();
                }
            }

            function closeImage(){
                flag = 1;
                $('#chooseImg').show();
                $('#image').val('');
                $('#imageDiv').css('margin-top', '0px');
                $('#imageDiv').css('margin-bottom', '0px');
                $('#img').hide();
                $('#close').hide();
            }

        </script>
    @endsection
@endsection
