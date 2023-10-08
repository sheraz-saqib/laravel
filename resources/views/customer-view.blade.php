@extends('welcome')
@section('main_section')
<style>
    body {
        margin: 2rem;
        display: block;

        min-height: 100vh !important;
    }

    .btn-primary {
        margin-bottom: 2rem;
    }

    .status {
        padding: .2rem;
        border-radius: .2rem;
        width: 6rem;
        font-size: .8rem;
    }
</style>
<a href="{{url('/')}}/customer/register">
    <button class="btn btn-primary">Add customer</button>
</a>

{!!$error ?? ''!!}
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">name</th>
            <th scope="col">Email</th>
            <th scope="col">contact</th>
            <th scope="col">age</th>
            <th scope="col">status</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>


        @foreach ($customers as $customer)
        <tr>
            <th scope="row">{{$customer->customer_id}}</th>
            <th scope="row">{{$customer->customer_name}}</th>
            <th scope="row">{{$customer->customer_email}}</th>
            <th scope="row">{{$customer->customer_contact}}</th>
            <th scope="row">{{$customer->customer_age}}</th>
            @if ($customer->status == '1')
            <th scope="row ">
                <p class="bg-success text-center text-white status">active now</p>
            </th>
            @else
            <th scope="row ">
                <p class="bg-danger text-center text-white status">offline</p>
            </th>

            @endif
            <th scope="row">

                <a href="{{url('/')}}/customer/delete/{{$customer->customer_id}}">
                    <button class="btn btn-danger">delete</button>
                </a>

                <a href="{{route('customer.edit' , ['id' => $customer->customer_id])}}">
                    <button class="btn btn-warning">edit</button>
                </a>
            </th>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection