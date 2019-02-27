<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Log In - Worldskills Travel</title>
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
                        <h2>Log in to your account</h2>

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form method="POST" role="form" action="{{route('postLogin')}}"
                                    aria-label="{{ __('Login') }}" id="form_login">
                                    @csrf
                                    @if($errors->has('errorlogin'))
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">&times;</button>
                                        {{$errors->first('errorlogin')}}
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <label class="control-label">Email Address:</label>
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Enter your email address">
                                            @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Password:</label>
                                        <input name="password" id="password" type="password" class="form-control"
                                            placeholder="Enter your password">
                                            @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" id="login" class="btn btn-primary">Log In</button>
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
