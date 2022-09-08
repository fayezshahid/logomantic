@extends('dashboard')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-8" style="margin-top: 30px;">
            <form action="{{ route('editPass', $username) }}" method="post">
                @csrf
                
                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Username</label>
                    <input type="text" name="username" class="form-control @error('username') border-3 border-danger @enderror" value="{{ $username }}">
                    @error('username')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Current Password</label>
                    <input type="password" name="current_password" placeholder="Enter your current password" class="form-control @error('current_password') border-3 border-danger @enderror">
                    @error('current_password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Password</label>
                    <input type="password" name="password" placeholder="Enter your new password" class="form-control @error('password') border-3 border-danger @enderror">
                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Password Confirmation</label>
                    <input type="password" name="password_confirmation" placeholder="Enter your new password again" class="form-control">
                </div>

                <div>
                    <button class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full" type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
