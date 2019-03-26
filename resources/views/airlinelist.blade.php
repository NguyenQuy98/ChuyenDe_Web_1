@extends('layout.main')
@section('content')

<div class="container">
    <section>
        <h2>Danh sach các quốc gia có hãng bay</h2>
        @foreach($Nation as $nation)
            <article>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><strong><a href="#">Quốc Gia: {{$nation->nation_name}} có các hãng bay sau:</a></strong></h4>
                                <div class="row">
                                    @foreach($nation->airline_Nation as $airline)
                                    <div class="col-sm-3">
                                        <p class="control-label">Name: {{$airline->name}}</p>
                                        <p class="control-label">Code: {{$airline->code}}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
        <div class="text-center">
        {{$Nation->links()}}
        </div>
    </section>
</div>
@endsection
