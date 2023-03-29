<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <base href="{{\URL::to('/')}}">

    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
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
    <title>PFF</title>
</head>

<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Logo</h1>
                </div>
                <div class="p-1 flex flex-row items-center">


                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="images/avatar.jpg" alt="image">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">{{Auth::user()->name}}</a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a></li>
                          <li><hr class="border-t mx-2 border-grey-ligght"></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                        </ul>
                    </div>
                    @auth
                    <li class="nav-item">
                     <a class="nav-link active" href="{{route('login')}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ Auth::user()->roleName() }}</a>
                    </li>

                     <li class="nav-item">
                         <a href="" onclick="event.preventDefault(); document.querySelector('#logout-form').submit();" class="nav-link btn btn-dark btn-sm" style="color: white">Déconnexion</a>
                     </li>

                     <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
                         @csrf
                     </form>

                 @endauth
                </div>
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-black">
                        <a href="{{route('admin')}}"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            <p style="color: white">ADMIN</p>
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>

                    <li class="w-full h-full py-3 px-2 border-b border-light-border bg-red-600">
                        <a href="{{route('compte')}}"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-table float-left mx-2"></i>
                            <p style="color: white">GESTION DES COMPTES</p>
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border bg-blue-600">
                        <a href="{{route('lieux')}}"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-home float-left mx-2"></i>
                            <p style="color: white">GESTION DES LIEUX</p>
                            <span><i class="fa fa-event float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-300-border bg-yellow-500">
                        <a href="{{route('event')}}" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-square-full float-left mx-2"></i>
                            <p style="color: white">GESTION EVENNEMENTS</p>
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>

                    <li class="w-full h-full py-3 px-2 border-b border-300-border bg-green-500">
                        <a href="{{route('participe')}}" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-paypal float-left mx-2"></i>
                            <p style="color: white">GESTION RESERVATIONS</p>
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>

                    <li class="w-full h-full py-3 px-2 border-b border-300-border bg-orange-600">
                        <a href="#" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-square-full float-left mx-2"></i>
                            <p style="color: white">GESTION NOTIFICATIONS</p>
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>

            </aside>
            <!--/Sidebar-->
            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                       AJOUTER UN NOUVEAU LIEUX
                    </div>


            <form method="POST" action="{{ route('sotrelieux') }}" enctype="multipart/form-data">

                @csrf
                <div class="mb-2">
                    <label class="form-label border">Nom Lieux</label>
                    <input type="text" class="form-control @error('nom_lieux') is-invalid @enderror" name="nom_lieux"
                    placeholder="Entrer lieux" value="{{old('nom_lieux')}}">
                    @error('nom_lieux')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-label border">Ville</label>
                    <input type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" placeholder="Entrer ville" value="{{old('ville')}}">

                    @error('ville')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-label border">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" placeholder="Entrer votre image" value="{{old('image')}}">

                    @error('image')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Entrer</button>
                {{-- <a href="{{url('evenement-list')}}" class="btn btn-danger">Retour</a> --}}
            </form>
                </div>
            </div>



            <!--Main-->

            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                       GESTION DES LIEUX
                    </div>
                    <div class="p-3">
                        <table class="table-responsive w-full rounded">
                            <thead>
                              <tr>
                                <th class="border w-1/5 px-4 py-2">NOM LIEUX</th>
                                <th class="border w-1/5 px-4 py-2">VILLE</th>
                                <th class="border w-1/5 px-4 py-2">IMAGES DU LIEUX</th>
                                <th class="border w-1/5 px-4 py-2">ACTIONS</th>



                              </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp

                                @foreach ($lieuxes as $lieux)

                                <tr>
                                    <td class="border px-4 py-2">{{$lieux->nom_lieux}}</td>
                                    <td class="border px-4 py-2">{{$lieux->ville}}</td>
                                    <td><img src="{{$lieux->image_path}}" alt="{{$lieux->image_path}}" style="width: 150px;"></td>

                                    <td class="border px-4 py-2">
                                        <a href="{{route('editlieux', $lieux->id)}}" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                <i class="fas fa-edit"></i></a>

                                                <form method="POST" action="{{route('destroylieux', $lieux->id)}}" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" title="Delete lieux" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash"></i></button>
                                                </form>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!--/Grid Form-->
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; My Design</div>
            <div class="flex flex-1 mx-auto">Distributed by:  <a href="https://themewagon.com/" target=" _blank">Themewagon</a></div>
        </footer>
        <!--/footer-->

    </div>
        </div>
    </div>
</div>
</div>
<script src="./main.js"></script>
</body>

</html>
