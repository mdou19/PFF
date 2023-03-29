<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>PFF</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



 </head>
   <!-- body -->

<body class="main-layout">
       <div class="container" style="margin-top: 20px;">

      <!-- header -->
      <header>

        <ul class="navbar-nav ml-auto">

          </ul>
        <div class="header">
           <div class="container">
              <div class="row">
                 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                    <div class="full">
                       <div class="center-desk">
                          <div class="logo">
                             <a href="index.html"><img src="images/a.png" alt="#" /></a>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                       </button>
                       <div class="collapse navbar-collapse" id="navbarsExample04">
                          <ul class="navbar-nav mr-auto">
                             <li class="nav-item">
                                <a class="nav-link" href="{{route('acc')}}">Accueil</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="{{route('listeevenement')}}">Evenements</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="{{route('lieuxevenement')}}">Lieux events</a>
                             </li>
                              {{--  <li class="nav-item">
                                <a class="nav-link" href="{{route('event')}}">Gallery</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="blog.html">Blog</a>
                             </li> --}}
                             <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contactez Nous</a>
                             </li>
                             <li class="nav-item">

                               </li>
                               <li class="nav-item">
                                @if (Auth::user())
                                @if (Auth::user()->roles==='ADMIN')
                                <a class="nav-link active" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ESPACE Admin
                              </a>
                              <li class="nav-item">
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                               <button type="submit" class="btn">Deconnexion</button>
                              </li>
                                @endif

                                </form>
                                </li>
                                @if (Auth::user()->roles==='PROMO')
                                <a class="nav-link active" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ESPACE PROMO
                              </a>
                              </li>
                              <li class="nav-item">
                                <form action="{{route('logout')}}" method="post">
                               @csrf
                               <button type="submit" class="btn">Deconnexion</button>
                        @endif
                               @if (Auth::user()->roles==='USER')
                               <a class="nav-link active" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ESPACE USER
                            </a>
                             </li>
                             <li class="nav-item">
                               <form action="#" method="post">
                              @csrf
                              <button type="submit" class="btn">Deconnexion</button>
                                @endif
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{route('login')}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Se Connecter
                                  </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link active" href="{{route('register')}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S'INSCRIRE
                                  </a>
                                  </li>
                                @endif
                            </ul>
                        </div>
                      </div>
                   </nav>
                </div>
             </div>
          </div>
       </div>
    </header>
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
                                 <a href="{{url('evenement')}}" class="book_btn">PARTICIPER A UN EVENEMENT</a>
                              </div>
                           </div>
                     </div>
                  </div>

               </div>
            </div>

        @auth

        @if(! Auth::user()->isPromoteur())
         <div class="booking_ocline">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 text-center">
                     <div class="book_room">
                              <div class="col-md-12">
                                 <a href="{{url('evenement')}}" class="book_btn">PARTICIPER A UN EVENEMENT</a>
                              </div>
                           </div>
                     </div>
                  </div>

               </div>
            </div>
        @else
        <div class="booking_ocline">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="book_room">
                            <div class="col-md-12">
                                <a href="#" class="book_btn">Reserver Maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        @endif


        @endauth

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
                     {{-- <a class="read_more" href="#">Lire plus</a> --}}
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
      <div  class="our_room">
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-5">
                 <div class="titlepage">
                    <h2>NOS LIEUX</h2>
                    <p>Les lieux disponibles pour vos reservation d'evenement</p>
                   </div>
                    <div  class=" col-md-5 text-base">
                    <a class="read_more" href="{{route('lieuxevenement')}}">VOIR LES LIEUX</a>

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
                                 <img class="first-slide" src="images/img1.png" alt="First slide" height="120px">
                                 <div class="container">
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <img class="second-slide" src="images/ban11.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                 <img class="third-slide" src="images/iseppe.jpg" alt="Third slide">
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
      <!-- our_room -->
      @if (Auth::user())
      @if (Auth::user()->roles==='USER')
      <div  class="our_room">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>NOS EVENEMENTS EN VOGUE</h2>
                     <p>Les evenement phares a ne pas rater</p>
                    </div>
                     <div  class=" col-md-5 text-base">
                     <a class="read_more" href="#">Cliquer Pour Voir nos Evenements</a>

                  </div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
                  <div  class=" col-md-5 text-end">
                    <a class="read_more" href="#">Cliquer Pour Participer a un Evenement</a>

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
            @endif
         </div>
      </div>
      @endif

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
      <footer>

        <div class="footer">
           <div class="container">
              <div class="row">
                 <div class="col-md-4">
                    <h3>Contactez Nous</h3>
                    <ul class="conta">
                       <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                       <li><i class="fa fa-mobile" aria-hidden="true"></i> +221 785841208</li>
                       <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> mdoudiaw20@gmail.com</a></li>
                    </ul>
                 </div>
                 <div class="col-md-4">
                    <h3>Menu</h3>
                    <ul class="link_menu">
                       <li><a href="#">Acceuil</a></li>
                       <li><a href="#">Evenement</a></li>
                       <li><a href="#">Lieux Events</a></li>
                       <li><a href="#">Contactez Nous</a></li>
                    </ul>
                 </div>
                 <div class="col-md-4">
                    <h3>News letter</h3>
                    <form class="bottom_form">
                       <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                       <button class="sub_btn">subscribe</button>
                    </form>
                    <ul class="social_icon">
                       <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                       <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                       <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                       <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                 </div>
              </div>
           </div>
           <div class="copyright">
              <div class="container">
                 <div class="row">
                    <div class="col-md-10 offset-md-1">

                       <p>
                       © 2022 All Rights Reserved. Par le groupe SnEvents</a>
                       </p>

                    </div>
                 </div>
              </div>
           </div>
        </div>
     </footer>

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
