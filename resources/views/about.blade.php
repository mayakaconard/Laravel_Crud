@extends('master')
@section('content')

    {{--<div class="container">--}}
    {{--<table class="table">--}}
        {{--<div class="table-bordered">--}}


        {{--<thead>--}}
            {{--<th>First Name</th>--}}
            {{--<th>Last Name</th>--}}
            {{--<th>Email Address</th>--}}
            {{--<th>Phone Number</th>--}}
        {{--</thead>--}}
            {{--<tbody>--}}
        {{--<tr>--}}
            {{--<td>Conard</td>--}}
            {{--<td>Mayaka</td>--}}
            {{--<td>mayaka@gmail.com</td>--}}
            {{--<td>0720875292</td>--}}
        {{--</tr>--}}
        {{--</tbody>--}}
        {{--</div>--}}

    {{--</table>--}}
    {{--</div>--}}


    <br>

    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
            </div>
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email_address</td>
                <td>Phone Number</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $det)
                <tr>
                    <td>{{$det->id}}</td>
                    <td>{{$det->first_name}}</td>
                    <td>{{$det->last_name}}</td>
                    <td>{{$det->email_address}}</td>
                    <td>{{$det->mobile}}</td>
                    <td><a href="" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{route('details.destroy',$det->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>



    @endsection