@extends('dashboard')

@section('content')
    <style>
        #btn:hover{
            background-color: white;
            color: black;
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-8" style="margin-top: 30px;">
            <form action="{{ route('addUser') }}" method="post">
                @csrf
                
                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Username</label>
                    <input type="text" name="username" class="form-control @error('username') border-3 border-danger @enderror" placeholder="Enter username" value="{{ old('username') }}">
                    @error('username')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Password</label>
                    <input type="password" name="password" placeholder="Enter password" class="form-control @error('password') border-3 border-danger @enderror">
                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="font-weight: normal">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter password again" class="form-control">
                </div>

                <div>
                    <button type="submit" id="btn" class="btn btn-primary btn-block mb-4">Add User</button>
                </div>
            </form>
        </div>
    </div>
@endsection
