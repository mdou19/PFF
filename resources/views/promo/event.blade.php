@extends('base')
@section('content')
<body>
    <div class="container" style="margin-top: 20px">
        <div class="titlepage">
        <h1 class="text-center mt-5 titlepage">RESERVEZ VOTRE EVENEMENT</h1>
    </div>
    <h3 class="text-justify mt-5" style="color:rgba(22, 4, 27)">Cette page permet au  promoteur de faire une demande de réservation
        d'un lieu pour un événement donné.<br/>Pour ce faire, il va juste renseigner les données ci-dessous:</h3>
    <hr/ style="color:maroon" width="750px">

        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form method="POST" action="{{url('save-evenement')}}">
                @csrf
                <div class="md-3">
                    <label class="form-label">Nom Evenement</label>
                    <input type="text" class="form-control" name="nom_evenement"
                    placeholder="Entrer votre Nom_Evenement" value="{{old('nom_evenement')}}">
                    @error('nom_evenement')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="md-3">
                    <label class="form-label">Type Evenement</label>
                    <input type="text" class="form-control" name="type_evenement"
                    placeholder="Entrer votre Type_Evenement" value="{{old('type_evenement')}}">
                    @error('type_evenement')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="md-3">
                    <label class="form-label">Date Evenement</label>
                    <input type="date" class="form-control" name="date_evenement"
                    placeholder="Entrer votre Nom_Evenement" value="{{old('date_evenement')}}">
                    @error('date_evenement')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="md-3">
                    <label class="form-label">Descriptions</label>
                    <textarea type="text" class="form-control" name="descriptions"
                    placeholder="Descriptions de votre Evenement" value="{{old('descriptions')}}"></textarea>
                    @error('descriptions')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="md-3">
                    <label class="form-label">Affiche D'evenement</label>
                    <input type="file" class="form-control" name="images"
                    placeholder="Entrer votre image" value="{{old('images')}}">
                    @error('images')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label">Lieux</label>
                    <select name="lieux" class="form-control" style="width:185px" value="{{old('lieux')}}">
                        @foreach ($lieuxes as $lieux)
                            <option value="{{$lieux->id}}"> {{$lieux->nom_lieux}}
                        @endforeach
                    </select>
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
    </div>
</body>
@include('footer')
@endsection
