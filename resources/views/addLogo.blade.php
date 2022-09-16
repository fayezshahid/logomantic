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
            <form action="{{ route('addLogo') }}" method="post" enctype="multipart/form-data" id="form">
                @csrf

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Logo Name</label>
                    <input type="text" name="name" placeholder="Enter logo name" class="form-control @error('name') border-3 border-danger @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Logo Description</label>
                    <input type="text" name="description" placeholder="Enter logo description" class="form-control @error('description') border-3 border-danger @enderror" value="{{ old('description') }}">
                    @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Logo Price</label>
                    <input type="text" name="price" placeholder="Enter logo price" class="form-control @error('price') border-3 border-danger @enderror" value="{{ old('price') }}">
                    @error('price')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Logo Type</label>
                    <select class="form-control @error('logoType') border-3 border-danger @enderror" style="width: 100%" name="logoType" value="{{ old('logoType') }}">
                        <option selected disabled>Select a logo type</option>
                        @foreach ($logoTypes as $logoType)
                            <option value="{{ $logoType->name }}">{{ $logoType->name }}</option>
                        @endforeach
                    </select>
                    @error('logoType')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4" id="chooseImg">
                    <label class="form-label" style="font-weight: normal">Logo Image</label>
                    <input type="file" id="image" class="form-control @error('image') border-3 border-danger @enderror" name="image" onchange="displayImage(this)" value="{{ old('image') }}">
                    @error('image')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between" id="imageDiv">
                    <img id="img" src="" alt="">
                    <span id="close" onclick="closeImage()" style="cursor: pointer; height: 5px; display: none;">x</span>
                </div>

                <div class="mb-4" id="hexcodeDiv">
                    <label class="form-label" style="font-weight: normal">Logo Hexcodes</label>
                    <div class="d-flex justify-content-between">
                        <input type="text" name="hexcode1" class="form-control w-75">
                        <button type="button" class="btn btn-warning" onclick="addMore()">Add More</button>
                    </div>
                    @error('hexcode1')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div>
                    <button type="button" id="btn" class="btn btn-primary btn-block mb-4">Add Logo</button>
                </div>
            </form>
        </div>
    </div>

    @section('scripts')
        <script>
            $(document).ready(function(){
                if($('#image').val() != ''){
                    displayImage($('#image'));
                }
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
                $('#chooseImg').show();
                $('#image').val('');
                $('#imageDiv').css('margin-top', '0px');
                $('#imageDiv').css('margin-bottom', '0px');
                $('#img').hide();
                $('#close').hide();
            }

            var hexInputCount = 1;
            function addMore(){
                hexInputCount++;
                $('#hexcodeDiv').append(`
                <div class="d-flex justify-content-between" id="hexcode${hexInputCount}">
                    <input type="text" name="hexcode${hexInputCount}" class="form-control w-75 mt-2">
                    <button style="height: 30px; margin-top: 15px; font-size: 12px;" type="button" class="btn btn-danger" onclick="deleteInput(this.parentNode.id)">Delete this field</button>
                </div>
                `);
            }

            function deleteInput(id){
                $('#' + id).remove();
            }

            $('#btn').click(function(){
                $('#form').append(`<input type="hidden" name="hexInputCount" value="${hexInputCount}">`);
                $('#form').submit();
            })

        </script>
    @endsection
@endsection
