@extends('base')
@section('content')
<!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner2.jpg" alt="First slide">
                  <div class="container">
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/img2.webp" alt="Second slide">
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/ban8.webp" alt="Third slide">
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <div class="booking_ocline">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 text-center">
                     <div class="book_room">
                              <div class="col-md-12">
                                 <a href="{{route('register')}}" class="book_btn">Reserver Maintenant</a>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Apropos d'IsepEvens</h2>
                     <p>IsepEvens est une groupe spécialisée dans l'organisation des événements.
                        Atravers notre plateforme nous assurons de bien gèrer les grandes étiquettes de communications evenementielles. Afin d'adapter aux besoins et aux budgets de nos clients, nous offrons des services complets en communication. Nous pouvons agir en rôle consultatif, la création, la production et le suivi du travail effectué.</p>
                     <a class="read_more" href="#">Lire plus</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/a.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- our_room -->
      <div  class="our_room">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>NOS EVENEMENTS EN VOGUE</h2>
                     <p>Les six evenement phares a ne pas rater</p>
                    </div>
                     <div  class=" col-md-5 text-base">
                     <a class="read_more" href="#">Cliquer Pour Voir nos Evenemens Phares</a>

                  </div>
                  </div>

                  <div class="col-md-7">
                    <div class="about_img">
                        <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
                            <ol class="carousel-indicators">
                               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                               <li data-target="#myCarousel" data-slide-to="1"></li>
                               <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                               <div class="carousel-item active">
                                  <img class="first-slide" src="images/isepp.jpg" alt="First slide" height="120px">
                                  <div class="container">
                                  </div>
                               </div>
                               <div class="carousel-item">
                                  <img class="second-slide" src="images/isep3.jpg" alt="Second slide">
                               </div>
                               <div class="carousel-item">
                                  <img class="third-slide" src="images/cons.jpg" alt="Third slide">
                               </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                         </div>
                    </div>
                 </div>

               </div>
            </div>



         </div>
      </div>

      <!--  contact -->
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
      <!-- end contact -->
      <!--  footer -->
      @include('footer')
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
@endsection
