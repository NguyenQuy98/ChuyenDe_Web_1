@extends('layout.main')
@section('content')
    <main>
        <div class="container">
            <section>
                <h3>Flight Booking</h3>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form role="form" action="{{route('flight-list')}}" id = "search">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 class="form-heading">1. Flight Destination</h4>
                                    <div class="form-group">
                                        <label class="control-label">From: </label>
										<select class="form-control" name="from" id="from">
											<!-- <option value="1">TP. Hồ Chí Minh (SGN)</option>
                                            <option value="2">Hà Nội (HAN)</option> -->
                                            @foreach ($cities as $city)
                                                <option value="{{$city->id}}">{{$city->name}} ({{$city->code}})</option>
                                            @endforeach
										</select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">To: </label>
                                        <select class="form-control" name="to" id="to">
											<!-- <option value="1">TP. Hồ Chí Minh (SGN)</option>
                                            <option value="2">Hà Nội (HAN)</option> -->
                                            @foreach ($cities as $city)
                                                <option value="{{$city->id}}">{{$city->name}} ({{$city->code}})</option>
                                            @endforeach
										</select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <h4 class="form-heading">2. Date of Flight</h4>
                                    <div class="form-group">
                                        <label class="control-label">Departure: </label>
                                        <input id="departure" name="departure" type="date" class="form-control" placeholder="Choose Departure Date">
                                    </div>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label><input type="radio" id="One_Way" name="flight_type" checked value="one-way">One Way</label>
                                            <label><input type="radio" id="Return" name="flight_type" value="return">Return</label>
                                        </div>
                                    </div>
                                    <div class="form-group" id="Return_input">
                                        <label class="control-label">Return: </label>
                                        <input id="return_day" name="return_day" type="date" class="form-control" placeholder="Choose Return Date">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <h4 class="form-heading">3. Search Flights</h4>
                                    <div class="form-group">
                                        <label class="control-label">Total Person: </label>
                                        <select id="total-person" name="total_person" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Flight Class: </label>
                                        <select class="form-control" id="flight-class" name="flight-class">
                                            @foreach ($Flight_class as $Flight_class)
                                                <option value="{{$Flight_class->id}}">{{$Flight_class->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button  type="submit" class="btn btn-primary btn-block" id="btnSearch">Search Flights</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>

    @endsection
