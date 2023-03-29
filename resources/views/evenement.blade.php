@extends('base')
@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="titlepage">
        <h2>EVENEMENTs</h2>
    </div>
    </div>
<div id="evenement" class="container-fluid text-center bg-grey">

    <div class="row text-center">
        @foreach($evenements as $evenement)
        <div class="col-sm-4">
        <div class="thumbnail">
            <img src="{{ $evenement->image_path }}" alt="{{ $evenement->images }}" style="height:300px">
            <h4 class="title">{{ $evenement->nom_evenement }}</h4>
            <p>{{($evenement->description) }}</p>
            <p>Date: <?php echo date('d/m/Y', strtotime($evenement->date_evenement)); ?></p>
            <p class="badge-warning">Lieu: {{ $evenement->lieu->nom_lieux }}</p>
            <p>{{ ucfirst($evenement->type_evenement) }} </p>
            <a href="" data-toggle="modal" data-target="#reserverEvenement{{ $evenement->id }}" class="btn btn-primary evenement_reserver button">RESERVER</a>
            <a href="{{route('evenements.show',$evenement->id)}}" class="btn btn-dark">DETAILS</a>

            @include('evenements/reserverModal', ['evenement' => $evenement])
        </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
