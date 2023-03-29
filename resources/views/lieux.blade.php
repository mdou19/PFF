@extends('base')
@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="titlepage">
        <h2>LES LIEUX DISPONIBLE</h2>
    </div>
    </div>
<div id="evenement" class="container-fluid text-center bg-grey">

    <div class="row text-center">
        @foreach($lieuxes as $lieux)
        <div class="col-sm-4">
        <div class="thumbnail">
            <img src="{{ $lieux->image_path }}" alt="{{ $lieux->image }}" style="height:200px">
            <h4 class="badge-light">{{ $lieux->nom_lieux }}</h4>
            <p class="badge-success">{{($lieux->ville) }}</p>

        </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
