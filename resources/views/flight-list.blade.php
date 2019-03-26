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
                    @endforeach
                </h2>
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong><a href="{{route('flight-detail',['id' => $item->id])}}">{{$item->name}}</a></strong></h4>
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
                                            <h3 class="price text-danger"><strong>{{$item->price}} </strong></h3>
                                            <div>
                                                <a href="{{route('flight-detail',['id' => $item->id])}}" class="btn btn-link">See Detail</a>
                                                <a href="{{route('flight-book')}}" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
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
