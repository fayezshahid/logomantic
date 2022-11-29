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
            <form action="{{ route('addService') }}" method="post" id="form">
                @csrf
                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Package</label>
                    <select class="form-control @error('logo_id') border-3 border-danger @enderror" style="width: 100%" name="package_id" value="{{ old('package_id') }}">
                        <option selected disabled>Select a package</option>
                        @foreach ($packages as $package)
                            <option value="{{ $package->id }}">{{ $package->name }}</option>
                        @endforeach
                    </select>
                    @error('package_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4" id="serviceDiv">
                    <label class="form-label" style="font-weight: normal">Services</label>
                    <div class="d-flex justify-content-between mb-2">
                        <input type="text" placeholder="Service" name="service1" style="width: 700px" class="form-control" value="{{ old('service1') }}">
                        <input type="text" placeholder="Price" name="price1" style="width: 250px" class="form-control" value="{{ old('price1') }}">
                        <button type="button" class="btn btn-warning" style="width: 109px" onclick="addMore()">Add More</button>
                    </div>
                    @error('service1')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    @error('price1')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div>
                    <button type="button" id="btn" class="btn btn-primary btn-block mb-4">Add Service</button>
                </div>
            </form>
        </div>
    </div>

    @section('scripts')
        <script>
            var serviceCount = 1;

            function addMore(){
                serviceCount++;
                $('#serviceDiv').append(`
                <div class="d-flex justify-content-between mb-2" id="service${serviceCount}">
                    <input type="text" placeholder="Service" name="service${serviceCount}" style="width: 700px" class="form-control">
                    <input type="text" placeholder="Price" name="price${serviceCount}" style="width: 250px" class="form-control">
                    <button style="height: 30px; margin-top: 4px; font-size: 12px;" type="button" class="btn btn-danger" onclick="deleteInput(this.parentNode.id)">Delete this field</button>
                </div>
                `);
            }

            function deleteInput(id){
                $('#' + id).remove();
            }

            $('#btn').click(function(){
                $('#form').append(`<input type="hidden" name="serviceCount" value="${serviceCount}">`);
                $('#form').submit();
            })
        </script>
    @endsection
@endsection
