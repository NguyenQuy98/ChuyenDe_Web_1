@extends('layout.main')
@section('content')

    <main>
        <div class="container">
            <section>
            @foreach($airway as $item)
                <h2>@foreach($city_from as $city_from)
                    {{$city_from->name}} ({{$city_from->code}})
                    @endforeach
                    <i class="glyphicon glyphicon-arrow-right"></i>
                    @foreach($city_to as $city_to)
                     {{$city_to->name}} ({{$city_to->code}})
                    @endforeach</h2>
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong>{{$item->name}}</strong></h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">From:</label>
                                            <div><big class="time">{{$item->hours_from}}</big></div>
                                            <div><span class="place">{{$city_from->name}} ({{$city_from->code}})</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">To:</label>
                                            <div><big class="time">{{$item->hours_to}}</big></div>
                                            <div><span class="place">{{$city_to->name}} ({{$city_to->code}})</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Duration:</label>
                                            <div><big class="time">{{$item->Duration}}</big></div>
                                            <div><strong class="text-danger">{{$item->Transit}} Transit</strong></div>
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            <h3 class="price text-danger"><strong>{{$item->price}}</strong></h3>
                                            <div>
                                                <a href="{{route('flight-book')}}" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#flight-detail-tab">Flight Details</a></li>
                                        <li><a data-toggle="tab" href="#flight-price-tab">Price Details</a></li>
                                    </ul>
                                    @foreach($transit as $transit)
                                    <div class="tab-content">
                                        <div id="flight-detail-tab" class="tab-pane fade in active">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <h5>
                                                        <strong class="airline">{{$transit->name_transit}}</strong>
                                                        <p><span class="flight-class">Economy</span></p>
                                                    </h5>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div><big class="time">{{$transit->time_from}}</big></div>
                                                                    <div><small class="date">29 Apr 2017</small></div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div><span class="place">
                                                                    @foreach($city_Transit_from as $Transit_from)
                                                                    {{$Transit_from->name}} ({{$Transit_from->code}})
                                                                    @endforeach</span></div>
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
                                                                    <div><big class="time">{{$transit->time_to}}</big></div>
                                                                    <div><small class="date">29 Apr 2017</small></div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div><span class="place">
                                                                    @foreach($city_Transit_to as $Transit_to)
                                                                        {{$Transit_to->name}} ({{$Transit_to->code}})
                                                                    @endforeach</span></div>
                                                                    <div><small class="airport">Doha Hamad International Airport</small></div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 text-right">
                                                            <label class="control-label">Duration:</label>
                                                            <div><strong class="time">{{$transit->Duration}}</strong></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item list-group-item-warning">
                                                    <ul>
                                                        <li>Transit for {{$transit->Duration}} in {{$Transit_to->name}} ({{$Transit_to->code}})</li>
                                                    </ul>
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
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </section>
        </div>
    </main>

 @endsection
