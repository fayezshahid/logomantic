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
            <form action="{{ route('addCoupon') }}" method="post">
                @csrf

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Logo Id</label>
                    <select class="form-control @error('logo_id') border-3 border-danger @enderror" style="width: 100%" name="logo_id" value="{{ old('logo_id') }}">
                        <option selected disabled>Select a logo id</option>
                        <option value="All">All</option>
                        @foreach ($logos as $logo)
                            <option value="{{ $logo->id }}">{{ $logo->id }}</option>
                        @endforeach
                    </select>
                    @error('logo_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Coupon Code</label>
                    <input type="text" name="code" placeholder="Enter code" class="form-control @error('code') border-3 border-danger @enderror" value="{{ old('code') }}">
                    @error('code')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Discount</label>
                    <input type="text" name="discount" placeholder="Enter discount" class="form-control @error('discount') border-3 border-danger @enderror" value="{{ old('discount') }}">
                    @error('discount')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Is Active</label>
                    <select class="form-control @error('isActive') border-3 border-danger @enderror" style="width: 100%" name="isActive" value="{{ old('isActive') }}">
                        <option selected value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                    @error('isActive')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div>
                    <button type="submit" id="btn" class="btn btn-primary btn-block mb-4">Add Coupon</button>
                </div>
            </form>
        </div>
    </div>
@endsection
