<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mydod</title>

    <link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\login.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\nav.css')}}">
    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>
</head>
<style>

</style>
<body>
    <div id="app" style="left: 200px;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
            <div class="container" >
            <img src="{{asset('assets\img\al.png')}}" id="icon" alt="User Icon"  style="width: 60px;"/> &nbsp;&nbsp;&nbsp;
                <a href ="/home" style="text-decoration: none;" class="logo" style="font-size: 80px;" >
                   MyDoD
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="navbar-nav ml-auto">
                        

                        <a href="/home" class="dropbtn" style="text-decoration: none;">Accueil</a>
                        @auth
                        @if(Auth::user()->etat=='admin')

                        <div class="dropdown">
                        <button class="dropbtn ">Consultation</button>
                        <div class="dropdown-content" style="width: 185px;">
                        <a href="/in_list" style="font-weight: bolder; font-size: 12px;">Incident</a>
                      <!--  <a href="#">Link 2</a>-->
                        <a href="/liste_total" style="font-weight: bolder; font-size: 12px;">Expression de Besoin</a>
                    </div>
                    <div>
            
                                                        
                                
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
   
</ul>
</div>

                        
                         @endif        
                         @endauth                                               
                     <div class="dropdown">
                     
                    <button class="dropbtn ">{{ Auth::user()->name }}</button>
                    <div class="dropdown-content">
                      <!--  <a href="#">profil</a>-->
                         <!--  <a href="#">Link 2</a>-->
                        <a href="/deconnexion" style="font-size: 12px;">Deconnexion</a>
                    </div>
                    
                    <div>
            
                                                        
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                       
                    </ul>
                </div>
            </div>
        </nav>

        
    </div>
</body>
</html>
<br>
@yield('content')