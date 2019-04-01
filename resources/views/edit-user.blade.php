@extends('layout.main')
@section('content')
    <main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-3">
                <h2>Edit User đặt vé</h2>
                <p>
                    @if ($errors->any)

                        @foreach ($errors->all() as $error )
                        <p style="color:red;border:1px solid red;">{{ $error}}</p>
                        @endforeach

                    @endif
                    @if(session()->has('success'))
                    <p style="color:green;border:1px solid green;">{{session('success')}}</p>
                    @endif
                </p>
                <div class="panel panel-default">
                    <div class="panel-body">
                    <form id="edit-form" role="form" method="post" action="{{route('edit-user-post') }}">
                    <input type="hidden" name="id" value="{{$user->id}}">
                        {{ csrf_field() }}
                        @foreach($user_booking as $user_booking)
                            <div class="form-group">
                                <label class="control-label">Email Address:</label>
                            <input disabled id="email" name="email" type="email" value="{{$user_booking->email}}" class="form-control" placeholder="Enter your email address">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Name:</label>
                                <input id="name" name="name" type="text" class="form-control" value="{{$user_booking->name}}" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Phone Number:</label>
                                <input id="tel" name="tel" type="tel" class="form-control" value="{{$user_booking->phone}}" placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Price:</label>
                                <input id="price" name="price" type="text" value="{{$user_booking->price}}" class="form-control" placeholder="Enter your price number">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Card Number:</label>
                                <input id="Card_Number" name="Card_Number" type="text" value="{{$user_booking->Card_Number}}" class="form-control" placeholder="Card Number">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Name On Card:</label>
                                <input id="Name_On_Card" name="Name_On_Card" type="text" value="{{$user_booking->Name_On_Card}}" class="form-control" placeholder="Name On Card">
                            </div>
                            <div class="form-group">
                                <label class="control-label">CCV Code:</label>
                                <input id="CCV_Code" name="CCV_Code" type="text" value="{{$user_booking->CCV_Code}}" class="form-control" placeholder="CCV_Code">
                            </div>
                            @endforeach
                            <div class="text-right">
                                <button id="" type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
