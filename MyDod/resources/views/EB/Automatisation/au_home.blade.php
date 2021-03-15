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
    <link rel="stylesheet" href="{{asset('assets\css\theme.css')}}">
    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>
</head>
<body>

    <div id="app" style="left: 200px;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
            <div class="container">
              <a href ="/home" style="text-decoration: none;" class="logo" style="font-size: 80px;" >
                   My DoD
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="navbar-nav ml-auto">
                        

                        <a href="/home" class="dropbtn" style="text-decoration: none;">Home</a>
                        
                        <a href="#" class="dropbtn" style="text-decoration: none;">Contact us</a>                                                                  
                     <div class="dropdown">
                     
                    <button class="dropbtn ">{{ Auth::user()->name }}</button>
                    <div class="dropdown-content">
                        <a href="#">profil</a>
                        <a href="#">Link 2</a>
                        <a href="/deconnexion">Deconnexion</a>
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
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    font-family: "Lato", sans-serif;
  }

  .sidenav {
    height: 100%;
    width: 200px;
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: transparent;
    overflow-x: hidden;
    padding-top: 20px;
    border-radius: 10px 100px / 120px;
    background-color: #2B2D3B;
  }

  .sidenav a, .dropdown-btn  {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: whitesmoke;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
  }
.n{
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    font-weight: bolder;
    color: whitesmoke;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    outline: none;

}

 
  .main {
    margin-left: 200px;
    font-size: 20px;
    padding: 0px 10px;
  }


 .dropdown-btn:hover{
   background-color: white;
   color: #2B2D3B;
   text-decoration: none;
 }


  .dropdown-container {
    display: none;
    background-color:transparent;
    padding-left: 8px;
  }

  .fa-caret-down {
    
    float: left;
    padding-right: 20px;
  }

  
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
</style>
</head>
<body>

<div class="sidenav" style="margin-top: 100px; height: 550px;  margin-left: 120px; width: 280px;" >
<label class= "n" style="text-align: center; "  title="Automatisation des Processus Robotisées"> RPA </label>

    <a href="/home_eb" class="dropdown-btn">Acceuil</a>

 

 
    <a href="/process_rpa" class="dropdown-btn " style=" margin-left: 0px;">Process RPA</a>
    <a href="/au_ano_maj" class="dropdown-btn "style=" margin-left:0px;">Anomalie & MAJ RPA</a>
  
  
 
  
</div>




<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</body>
</html> 


<div style="padding-left: 300px;">@yield('au')</div>