@extends('base')
@section('content')
<div class="col-md-12">
    <div class="titlepage">
     <h2 style="color: darkgoldenrod">COMMENCER VOTRE RESERVATION</h2>
 </div>
 </div>
    <h3 class="text-justify mt-5" style="color:darkgoldenrod">Cette page permet au  promoteur de faire une demande de réservation
        d'un lieu pour un événement donné.<br/>Pour ce faire, il va juste renseigner les données ci-dessous:</h3>
    <hr style="color:maroon" width="750px" />

    <div class="row">
        <div class="col-md-12">
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
            <form method="POST" action="{{ route('evenements.store') }}" enctype="multipart/form-data">

            @csrf
            <div class="mb-3">
                <label class="form-label">Nom Evenement</label>
                <input type="text" class="form-control @error('nom_evenement') is-invalid @enderror" name="nom_evenement"
                placeholder="Entrer votre Nom_Evenement" value="{{old('nom_evenement')}}">
                @error('nom_evenement')
                <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Type Evenement</label>
                <input type="text" class="form-control @error('type_evenement') is-invalid @enderror" name="type_evenement" placeholder="Entrer votre Type_Evenement" value="{{old('type_evenement')}}">

                @error('type_evenement')
                <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Date Evenement</label>
                <input type="date" class="form-control @error('date_evenement') is-invalid @enderror" name="date_evenement" placeholder="Entrer votre Nom_Evenement" value="{{old('date_evenement')}}">

                @error('date_evenement')
                <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Descriptions</label>
                <textarea type="text" class="form-control @error('descriptions') is-invalid @enderror" name="descriptions" placeholder="Descriptions de votre Evenement" value="{{old('descriptions')}}"></textarea>
                @error('descriptions')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Affiche D'evenement</label>
                <input type="file" class="form-control @error('images') is-invalid @enderror" name="images" placeholder="Entrer votre image">
                @error('images')
                <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">Lieux</label>
                <select name="id_lieux" id="id_lieux" class="form-control" style="width:185px;">
                    <option value="">Sélectionner un lieu</option>
                    @foreach ($lieux as $lieu)
                        <option value="{{$lieu->id}}" > {{$lieu->nom_lieux}} </option>
                    @endforeach
                </select>
                @error('lieux')
                <div class="alert alert-danger" role="alert">{{$message}}
                </div>
                @enderror
            </div>
            @error('lieux')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
            </div><br/>

            <button type="submit" class="btn btn-primary">Reserver</button>
                <a href="{{url('evenement-list')}}" class="btn btn-danger">Retour</a>
            </form>
        </div>
    </div>
@endsection
