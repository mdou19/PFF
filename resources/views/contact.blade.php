@extends('base')
@section('content')

<div class="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Contactez Nous</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-6">
             <form id="request" class="main_form">
                <div class="row">
                   <div class="col-md-12 ">
                      <input class="contactus" placeholder="Nom" type="type" name="Name">
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Email" type="type" name="Email">
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Telephone" type="type" name="Phone Number">
                   </div>
                   <div class="col-md-12">
                      <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                   </div>
                   <div class="col-md-12">
                      <button class="send_btn">Envoyer</button>
                   </div>
                </div>
             </form>
          </div>
          <div class="col-md-6">
             <div class="map_main">
                <div class="map-responsive">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.4206617271934!2d-17.209082585157947!3d14.745314489710431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec19f576460cdcd%3A0xb7fd4d662b01859f!2sISEP%20DIAMNIADIO%20-%20INSTITUT%20SUPERIEUR%20D&#39;ENSEIGNEMENT%20PROFESSIONNEL%20DE%20DIAMNIADIO!5e0!3m2!1sfr!2ssn!4v1664960413443!5m2!1sfr!2ssn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                     </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection
