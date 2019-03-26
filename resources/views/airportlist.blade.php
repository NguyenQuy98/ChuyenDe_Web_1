@extends('layout.main')
@section('content')

    <div class="container">
        <section>
            <h2>Danh sach thanh pho co san bay</h2>
            @foreach($cities as $city)
                <!-- @if(count($city->airports) > 0) -->
                    <article>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><strong><a href="#">Thành phố: {{$city->city_name}} có các sân bay sau:</a></strong></h4>
                                        <div class="row">
                                            @foreach($city->airports as $airport)
                                                <div class="col-sm-3">
                                                    <p class="control-label">Name: {{$airport->name}}</p>
                                                    <p class="control-label">Code: {{$airport->code}}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                <!-- @endif -->
            @endforeach
            <div class="text-center">
            {{$cities->links()}}
            </div>
        </section>
    </div>
@endsection
