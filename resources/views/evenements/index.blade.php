@extends('base')
@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="titlepage">
        <h2 style="color: darkgoldenrod">VOTRE LISTE DE RESERVATION</h2>

            <a href="{{ route('evenements.create') }}" class="bnt btn-primary justify-center">RESERVER UN EVENEMENT</a>


    </div>
    </div>

            <table class="table">
                <thead>
                    <tr style="color: darkgoldenrod">
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
                        <td><img src="{{$evenement->image_path}}" alt="{{$evenement->image_path}}" style="width: 120px;"></td>
                        <td>{{$evenement->lieu->nom_lieux }}</td>
                        <td> <a href="{{route('evenements.edit', $evenement->id)}}" class="bnt btn-warning btn-sm">Modifier</a>  | <form method="POST" action="{{route('evenements.destroy', $evenement->id)}}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete evenement" onclick="return confirm(&quot;Confirm delete?&quot;)">Supprimer</button>
                        </form></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
