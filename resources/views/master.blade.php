<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My first Laravel Application</title>
    <base href="{{URL::asset('/')}}" target="blank">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
</head>

<body>

{{--<div class="container">--}}
    {{--<div class="page-header">--}}
        {{--<h1 class="header align-content-center">This is My first Laravel Application</h1>--}}
    {{--</div>--}}
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
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#">Laravel App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Projects
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">project 1</a>
                    <a class="dropdown-item" href="#">Project 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Project 3</a>
                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
{{--End of Nav--}}

<div class="container">
    @yield('content')



</div>
{{--Footer--}}
<div class="card">
    <div class="card-body bg-secondary" style="text-align: center">
        This is My footer
    </div>
</div>


<script src="{{url('js/popper.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>

</body>
</html>