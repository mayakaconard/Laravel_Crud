
@extends('master')
@section('content')
    {{--<div class="container">--}}
    {{--<h3>Laravel Crud Insert Data</h3><br>--}}
    {{--<div class="row">--}}

    {{--<form method="post" action="">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6 col-sm-12">--}}
    {{--<div class="form-group">--}}
    {{--<label for="fname">First Name</label>--}}
    {{--<input type="text" name="fname" class="form-control" id="" placeholder="Enter first name">--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label for="lname">Last Name</label>--}}
    {{--<input type="text" class="form-control" id="" placeholder="Enter Last Name">--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-6 col-sm-12">--}}
    {{--<div class="form-group">--}}
    {{--<label for="email">Email address</label>--}}
    {{--<input type="email" class="form-control" name="email" id="" placeholder="Enter email">--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label for="mobile">Phone number</label>--}}
    {{--<input type="text" class="form-control" id="" name="mobile" placeholder="Enter Phone number">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<button type="submit" name="submit" class="btn btn-primary">Submit</button>--}}

    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
   <h1>Collect user Information</h1>
    <div class="card-body">
        <div class="uper">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br />
        </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div><br />
        @endif
        <form method="post" action="{{ url('details') }}">
            <div class="form-group">
                @csrf
                <label for="name">First Name:</label>
                <input type="text" class="form-control" name="first_name"/>
            </div>
            <div class="form-group">
                <label for="price">Last Name :</label>
                <input type="text" class="form-control" name="last_name"/>
            </div>
            <div class="form-group">
                <label for="price">Email Address :</label>
                <input type="email" class="form-control" name="email"/>
            </div>
            <div class="form-group">
                <label for="quantity">Phone Number:</label>
                <input type="text" class="form-control" name="mobile"/>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    </div>
    @endsection