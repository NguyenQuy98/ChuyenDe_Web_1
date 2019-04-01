@extends('layout.main')
@section('content')

<div class="container">
    <section>
        <h2>Danh sach các vé đặt</h2>
        @foreach($airway as $airway)
            <article>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="row">
                                    <div class="col-sm-3">
                                        <p class="control-label">I Ariline: {{$airway->id_ariline}}</p>
                                        <p class="control-label">Hours from: {{$airway->hours_from}}</p>
                                        <p class="control-label">Hours to: {{$airway->hours_to}}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="control-label">Duration: {{$airway->Duration}}</p>
                                        <p class="control-label">price: {{$airway->price}}</p>
                                        <p class="control-label">total: {{$airway->total}}</p>
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
@endsection
