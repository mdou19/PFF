@extends('base')
@section('content')
<head>

</head>
<body>
    
    <div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2>Evenement List</h2>
            <div style="margin-right: 10%;float: right;">
            <a href="{{url('add-evenement')}}" class="bnt btn-primary">Reserver un Evenement</a>
            </div>
            <table class="table">
                <thead><tr>

                    <th>#</th>
                    <th>Nom Evenement</th>
                    <th>Type Evenement</th>
                    <th>Date Evenement</th>
                    <th>Descriptions</th>
                    <th>Affiche</th>
                    <th>Lieux</th>
                    <th>Action</th>
                </tr></thead>
                <tbody>
                    @php
                     $i = 1;
                    @endphp
                    @foreach ($evenements as $evenement)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$evenement->nom_evenement}}</td>
                        <td>{{$evenement->type_evenement}}</td>
                        <td>{{$evenement->date_evenement}}</td>
                        <td>{{$evenement->descriptions}}</td>
                        <td>{{$evenement->images}}</td>
                        <td>{{$evenement->id_lieux}}</td>
                        <td> <a href="{{route('evenements.edit', $evenement->id )}}" class="bnt btn-primary">Moodifier</a> | Supprimer</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>
@include('footer')
@endsection
