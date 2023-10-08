@extends('welcome')

@section('main_section')

<div class="container ">
    <form action="{{url('/')}}/form" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('user_name')}}">
            <div id="emailHelp" class="form-text text-danger">
                @error('user_name')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('user_email')}}">
            <div id="emailHelp" class="form-text text-danger">
                @error('user_email')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            <div id="emailHelp" class="form-text text-danger">
                @error('password')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1">
            <div id="emailHelp" class="form-text text-danger">
                @error('confirm_password')
                {{$message}}
                @enderror
            </div>
        </div>
        <input type="submit" class="btn btn-warning " value="submit">
    </form>
</div>


@endsection