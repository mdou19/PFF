@extends('base')
@section('content')

<div class="jumbotron container">
    <img class="img-thumbnail" src="{{ $evenement->image_path }}" alt="{{ $evenement->nom_evenement }}" style="height:500px">
    <h4 class="col-6 text-center" style="margin-left: 6.5em">NOM EVENEMENT: {{$evenement->nom_evenement}}</h4>
    <div class="d-flex justify-content-center my-4">
    </div>

</div>
<div class="container">
    <h4 class="text-left my-3 pt-3 pt-3">TYPE D'EVENEMENT: {{ $evenement->type_evenement }}</h4>
    <h4 class="text-left my-3 pt-3 pt-3">DATE EVENEMENT: {{ $evenement->date_evenement }}</h4>
    {{-- <h4 class="text-left my-3 pt-3 pt-3">DATE EVENEMENT: {{ $evenement->lieux->nom_lieux }}</h4> --}}


    <p class="text-center"><h4>DESCRIPTIONS:</h4> {{$evenement->descriptions}}</p>
    <a class="btn btn-primary" href="{{url('evenement')}}">
        <i class="fas fa-arrow-left">Retour</i>
    </a>
        </div>
        </div>


        @include('footer')
@endsection
