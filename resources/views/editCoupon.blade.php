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
            <form action="{{ route('editCoupon', $coupon->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Logo Id</label>
                    <select class="form-control @error('logo_id') border-3 border-danger @enderror" style="width: 100%" name="logo_id" value="{{ $coupon->logo_id }}">
                        <option disabled>Select a logo id</option>
                        <option @if($coupon->logo_id == "All") selected @endif value="All">All</option>
                        @foreach ($logos as $logo)
                            <option @if($logo->id == $coupon->logo_id) selected @endif value="{{ $logo->id }}">{{ $logo->id }}</option>
                        @endforeach
                    </select>
                    @error('logo_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Discount</label>
                    <input type="text" name="discount" placeholder="Enter discount" class="form-control @error('discount') border-3 border-danger @enderror" value="{{ $coupon->discount }}">
                    @error('discount')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Is Active</label>
                    <select class="form-control @error('isActive') border-3 border-danger @enderror" style="width: 100%" name="isActive" value="{{ $coupon->isActive }}">
                        <option @if($coupon->isActive == 1) selected @endif value="1">Yes</option>
                        <option @if($coupon->isActive == 0) selected @endif value="0">No</option>
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
