@extends('dashboard')

@section('content')
<style>
    #btn:hover{
        background-color: white;
        color: black;
    }
</style>
    <div class="col" style="margin-left: 300px; padding-top: 100px">
        <div style="margin-bottom: 30px; padding-left: 350px">
            <a style="font-size: 20px" href="https://color.adobe.com/create/image" target="blank">Click Here to go to the website</a>
        </div>
        <div>
            <video width="1000" height="1000" controls>
                <source src="guide.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    @section('scripts')
        <script>
        </script>
    @endsection
@endsection
