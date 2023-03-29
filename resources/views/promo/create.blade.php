@extends('base')
@section('content')

<style type="text/css">
    input
    {
        border-radius: 5px;
        color:brown;
    }
</style>

<div class="container">
    <h1 class="text-center mt-5 titlepage">RESERVEZ VOTRE EVENEMENT</h1>
    <h3 class="text-justify mt-5" style="color:rgba(22, 4, 27)">Cette page permet au  promoteur de faire une demande de réservation
        d'un lieu pour un événement donné.<br/>Pour ce faire, il va juste renseigner les données ci-dessous:</h3>
    <hr/ style="color:maroon" width="750px">

    <form action="{{route('promo.store')}}" method="post" >
        @csrf
        <div class="col-12">
            <div class="form-group">
                  <input class="contactus" placeholder="Nom Evenement" type="text" name="nom_evenement">
               </div>
            </div>

               <div class="col-12">
                <div class="form-group">
                  <input class="contactus" placeholder="Type Evenement" type="text" name="type_evenement">
               </div>
               </div>

               <div class="col-12">
                <div class="form-group">
                  <input class="contactus" placeholder="Date Evenement" type="date" name="date_evenement" style="width:185px">
               </div>
               </div>

        <div class="col-12">
            <div class="form-group">
                <input class="contactus" placeholder="lieux" type="text" name="id_lieux" style="width:185px">

            </div>
        </div>
           </div>

           <div class="col-12">
            <div class="form-group"></div>

            <textarea type="text" name="descriptions" placeholder="descriptions" class="form-control" cols="30" rows="10" ></textarea>
        </div>
    </div>



           {{-- <div class="col-12">
            <div class="form-group">
              <input class="contactus" placeholder="Choisir votre fichier" type="file" name="image" style="width:185px">
           </div>
           </div> --}}

         {{-- <div class="col-12">
            <div class="form-group">
            <select name="user" class="form-control">
                @foreach ($users as $user)
                    <option value="{{$user->id}}"> {{$user->id}}
                @endforeach
            </select>
         </div>
        </div> --}}






        <div class="d-flex justify-content-center m-3">
            <button type="submit" class="btn btn-primary" value="reserver">RESERVER</button>
        </div>
    </div>

</form>
</div>

@endsection
