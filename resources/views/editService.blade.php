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
            <form action="{{ route('editService', $package->id) }}" method="post" id="form">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Package</label>
                    <select class="form-control @error('logo_id') border-3 border-danger @enderror" style="width: 100%" name="package_id" value="{{ old('package_id') }}">
                        <option disabled>Select a package</option>
                        @foreach ($packages as $p)
                            <option value="{{ $p->id }}" @if($p->id == $package->id) selected @endif>{{ $p->name }}</option>
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
                    <?php $i = 0 ?>
                    @foreach ($package->services as $service)
                        <?php ++$i ?>
                        <div class="d-flex justify-content-between mb-2" id="service{{ $i }}">
                            <input type="text" value="{{ $service->service }}" placeholder="Service" name="service{{ $i }}" style="width: 700px" class="form-control">
                            <input type="text" value="{{ $service->price }}" placeholder="Price" name="price{{ $i }}" style="width: 250px" class="form-control">
                            @if($i == 1)
                                <button type="button" class="btn btn-warning" style="width: 109px" onclick="addMore()">Add More</button>
                            @else
                                <button style="height: 30px; margin-top: 4px; font-size: 12px;" type="button" class="btn btn-danger" onclick="deleteInput(this.parentNode.id)">Delete this field</button>
                            @endif
                        </div>
                    @endforeach
                    <input type="hidden" value="{{ $i }}" id="serviceCount">
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
                    <button type="button" id="btn" class="btn btn-primary btn-block mb-4">Edit Service</button>
                </div>
            </form>
        </div>
    </div>

    @section('scripts')
        <script>
            var serviceCount = $('#serviceCount').val();

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
