<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Flights - Worldskills Travel</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}">
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
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
                        <li><a href="{{route('airway')}}">Airway</a></li>
                        <li><a href="{{route('airportlist')}}">Airport</a></li>
                        <li><a href="{{route('airlinelist')}}">Airline</a></li>
                        <li><a href="{{route('edit-user')}}">Edit User</a></li>
                        <li><a href="{{route('add-domestic-routes')}}">Add Domestic Routes</a></li>

                        @if (Auth::check())
                    <li style="font-weight:bold;font-size:20px;color:#000"><a href="{{route('edit')}}">{{Auth::user()->name}}</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                        @else
                            <li><a href="{{route('login')}}">Log In</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
