<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register - Worldskills Travel</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="{{route('home')}}" class="navbar-brand">Worldskills Travel</a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Welcome message</a></li>
                            <li><a href="{{route('home')}}">Flights</a></li>
                            <li><a href="{{route('login')}}">Log In</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-3">
                        <h2>Join as a Wordskills Travel Member</h2>

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form method="POST" role="form" action="{{route('register')}}"
                                    aria-label="{{ __('Register') }}" id="form_Register">
                                    @csrf
                                    @if(session()->has('success'))
                                    <p style="color:green">{{session('success')}}</p>
                                    @endif
                                    <div class="form-group">
                                        <label class="control-label">Email Address:</label>
                                        <input id="email" type="email"
                                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            name="email" value="{{ old('email') }}" required
                                            placeholder="Enter your email address">
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Password:</label>
                                        <input id="password" type="password"
                                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            name="password" required placeholder="Enter your password">
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Name:</label>
                                        <input id="name" type="text"
                                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            name="name" value="{{ old('name') }}" required
                                            placeholder="Enter your name">
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Phone Number:</label>
                                        <input id="Phone" type="tel"
                                            class="form-control{{ $errors->has('Phone') ? ' is-invalid' : '' }}"
                                            name="Phone" required placeholder="Enter your phone number">
                                        @if ($errors->has('Phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Phone') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="text-right">
                                        <button id="Register" type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="container">
                <p class="text-center">
                    Copyright &copy; 2017 | All Right Reserved
                </p>
            </div>
        </footer>
    </div>
    <!--scripts-->
    <script type="text/javascript" src="assets/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('/assets/sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/main.js') }}"></script>
</body>

</html>
