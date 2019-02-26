<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flights - Worldskills Travel</title>
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
            <section>
                <h2>UAE - Abu Dhabi (AUH) <i class="glyphicon glyphicon-arrow-right"></i> Indonesia - Jakarta (CGK)</h2>
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong>Qatar Airways</strong></h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">From:</label>
                                            <div><big class="time">18:45</big></div>
                                            <div><span class="place">Jakarta (CGK)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">To:</label>
                                            <div><big class="time">02:55</big></div>
                                            <div><span class="place">Abu Dhabi (AUH)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Duration:</label>
                                            <div><big class="time">11h 10m</big></div>
                                            <div><strong class="text-danger">1 Transit</strong></div>
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            <h3 class="price text-danger"><strong>IDR8.265.550,00</strong></h3>
                                            <div>
                                                <a href="{{route('flight-book')}}" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#flight-detail-tab">Flight Details</a></li>
                                        <li><a data-toggle="tab" href="#flight-price-tab">Price Details</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="flight-detail-tab" class="tab-pane fade in active">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <h5>
                                                        <strong class="airline">Qatar Airways QR-957</strong>
                                                        <p><span class="flight-class">Economy</span></p>
                                                    </h5>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div><big class="time">18:45</big></div>
                                                                    <div><small class="date">29 Apr 2017</small></div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div><span class="place">Jakarta (CGK)</span></div>
                                                                    <div><small class="airport">Soekarno Hatta Intl Airport</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <i class="glyphicon glyphicon-arrow-right"></i>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div><big class="time">23:20</big></div>
                                                                    <div><small class="date">29 Apr 2017</small></div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div><span class="place">Doha (DOH)</span></div>
                                                                    <div><small class="airport">Doha Hamad International Airport</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 text-right">
                                                            <label class="control-label">Duration:</label>
                                                            <div><strong class="time">7h 35m</strong></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item list-group-item-warning">
                                                    <ul>
                                                        <li>Transit for 1h 30m in Doha (DOH)</li>
                                                    </ul>
                                                </li>
                                                <li class="list-group-item">
                                                    <h5>
                                                        <strong class="airline">Qatar Airways QR-1052</strong>
                                                        <p><span class="flight-class">Economy</span></p>
                                                    </h5>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div><big class="time">00:50</big></div>
                                                                    <div><small class="date">30 Apr 2017</small></div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div><span class="place">Doha (DOH)</span></div>
                                                                    <div><small class="airport">Doha Hamad International Airport</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <i class="glyphicon glyphicon-arrow-right"></i>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div><big class="time">02:55</big></div>
                                                                    <div><small class="date">30 Apr 2017</small></div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div><span class="place">Abu Dhabi (AUH)</span></div>
                                                                    <div><small class="airport">Abu Dhabi Intl</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 text-right">
                                                            <label class="control-label">Duration:</label>
                                                            <div><strong class="time">2h 5m</strong></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="flight-price-tab" class="tab-pane fade">
                                            <h5>
                                                <strong class="airline">Qatar Airways</strong>
                                                <p><span class="flight-class">Economy</span></p>
                                            </h5>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="pull-left">
                                                        <strong>Passengers Fare (x3)</strong>
                                                    </div>
                                                    <div class="pull-right">
                                                        <strong>IDR24.796.650,00</strong>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="pull-left">
                                                        <span>Tax</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <span>Included</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li class="list-group-item list-group-item-info">
                                                    <div class="pull-left">
                                                        <strong>You Pay</strong>
                                                    </div>
                                                    <div class="pull-right">
                                                        <strong>IDR24.796.650,00</strong>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
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
</body>
</html>
