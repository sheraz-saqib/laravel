@extends('welcome')
@section('main_section')

<div class="container ">
    <form action="{{url('/')}}/comp" method="POST">
        @csrf

        <x-input type="text" name="user_name" label="Name" />
        <x-input type="email" name="user_email" label="email" />
        <x-input type="password" name="password" label="password" />
        <x-input type="password" name="confirm_password" label="confirm password" />
        <input type="submit" class="btn btn-warning " value="submit">
    </form>
</div>

@endsection