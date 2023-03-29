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
                         {{-- <li class="nav-item">
                            <a class="nav-link" href="{{route('createlieux')}}">A_propos</a>
                         </li> --}}
                         <li class="nav-item">
                            <a class="nav-link" href="{{route('listeevenement')}}">Evenement</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{route('lieuxevenement')}}">Lieux events</a>
                         </li>

                         <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contactez Nous</a>
                         </li>

                        @auth
                           <li class="nav-item">
                            <a class="nav-link active" href="{{route('login')}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ Auth::user()->roleName() }}</a>
                           </li>

                            <li class="nav-item">
                                <a href="" onclick="event.preventDefault(); document.querySelector('#logout-form').submit();" class="nav-link">Déconnexion</a>
                            </li>

                            <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
                                @csrf
                            </form>

                        @endauth
                      </ul>
                     </div>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>
