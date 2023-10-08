@extends('welcome')

@section('main_section')

<a href="{{url('/')}}/customer">
    <button class="btn btn-primary">back</button>
</a>


<div class="heading">
    <h2>{{$title}}</h2>
</div>
<div class="container ">

    <form action="{{$url}}" method="POST">
        @csrf
        @if ($title == "Registeration")
        <x-input type="text" name="name" label="Name" />
        <x-input type="email" name="email" label="Email" />
        <x-input type="text" name="contact" label="Contact" />
        <x-input type="text" name="age" label="Age" />
        @else

        <x-input type="text" name="name" label="Name" value="{{$customer->customer_name}}" />
        <x-input type="email" name="email" label="Email" value="{{$customer->customer_email}}" />
        <x-input type="text" name="contact" label="Contact" value="{{$customer->customer_contact}}" />
        <x-input type="text" name="age" label="Age" value="{{$customer->customer_age}}" />

        <select name="status" id="">
            <option value="1" {{$customer->status == 1 ? "selected" : ""}}>active now</option>
            <option value="0" {{$customer->status == 0 ? "selected" : ""}}>offline</option>
        </select>

        @endif


        @if ($title == "Registeration")
        <x-input type="password" name="password" label="Password" />
        <x-input type="password" name="confirm_password" label="Confirm password" />

        @endif

        <input type="submit" class="btn btn-warning " value="submit">
    </form>
</div>

@endsection