@extends('base')
@section('content')

<div class="modal-body">
    <form action="{{url('save-reservation')}}" method="post">
       @csrf
       <div class="form-group">
          <label for="recipient-prenom" class="col-form-label">PRENOM:</label>
          <input type="text" class="form-control" name="prenom">
          <input type="hidden" name="id_evenement" class="form-control id_evenement" value=''>
          <input type="hidden" name="type_evenement" class="form-control type_evenement" value=''>
       </div>
       <div class="form-group">
          <label for="recipient-name" class="col-form-label">NOM:</label>
          <input type="text" name="nom" class="form-control">
       </div>
       <div class="form-group">
          <label for="recipient-name" class="col-form-label">EMAIL:</label>
          <input type="email" name="email" class="form-control">
       </div>
       <div class="form-group">
          <label for="recipient-name" class="col-form-label">TELEPHONE:</label>
          <input type="text" name="telephone" class="form-control">
       </div>

       <label for="recipient-name" class="col-form-label">Evenement:</label>
       <select name="id_evenement" class="form-control">
        @foreach ($evenements as $evenement)
            <option value="{{$evenement->id}}"> {{$evenement->nom_evenement}}
        @endforeach
    </select>

       <div class="modal-footer">
    <button type="submit" class="btn btn-primary">ENTRER</button>
 </div>
    </form>
 </div>

@include('footer')
 @endsection
