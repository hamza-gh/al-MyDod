@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
<style>
    .containers {
    position: absolute;
    margin: auto;
    text-align: center;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 700px;
    height: 100px;
        }
    
    .btn_search:focus {
        outline: none;
        background-image: linear-gradient(0, #e63649, #e63649);
    }
    .btn_search {
        background-image: linear-gradient(0, #e63649, #e63649);
        background-size: 0;
        transition: 0.8s;
        background-repeat: no-repeat;
    }
    .btn_search:hover {
        background-size: 100%;
        color: #dddddd;
        border: 2px solid #dddddd;
    }
    .incl{
        size: 20px;
    }
    .btn {
        
    letter-spacing: 0.1em;
    cursor: pointer;
    font-size: 20px;
    font-weight: 200px;
    line-height: 45px;
    max-width: 100%;
    position: relative;
    text-decoration: none;
    text-transform: uppercase;
    width: 100%;

    border-radius: 20%;
    
    }
    .btn:hover {
    text-decoration: none;
    }

    .effect {
    color: #FFF;
    border: 4px solid #000;
    box-shadow:0px 0px 0px 1px #000 inset;
    background-color: #000;
    overflow: hidden;
    position: relative;
    transition: all 0.3s ease-in-out;
    }
    .effect:hover {
    border: 4px solid #666;
    background-color: #FFF;
    box-shadow:0px 0px 0px 4px #EEE inset;
    }

    .effect span {
    transition: all 0.2s ease-out;
    z-index: 2;
    }
    .effect:hover span{
    letter-spacing: 0.13em;
    color: #333;
    }

    .effect:after {
    background: #FFF;
    border: 0px solid #000;
    content: "";
    height: 155px;
    left: -75px;
    opacity: .8;
    position: absolute;
    top: -50px;
    -webkit-transform: rotate(35deg);
            transform: rotate(35deg);
    width: 50px;
    transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);
    z-index: 1;
    }
    .effect:hover:after {
    background: #FFF;
    border: 20px solid #000;
    opacity: 0;
    left: 120%;
    -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
    }

  
</style>
</head>
<body>
    
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
       
                @if (Route::has('login'))
                 <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                     @auth
                          @if(Auth::user()->etat=='user')
                           <!--user part -->
                           <div class="containers" style="display: inline-flex;">
        <a href="/liste_incident" class="btn effect " style="margin-right: 40px;"><span> Incident </span></a>
        <a href="/home_eb" class="btn effect"style="margin-right: 40px;"><span> Faire une Demande  </span></a>
        <a href="/ConsulatationEB" class="btn effect"style="margin-right: 40px;"><span> Consulter mes Demandes </span></a>
        </div>

                                   
                         @endif    

                                    @if(Auth::user()->etat=='admin')
                                    <!-- admin part -->
                                   

                                    @endif
                    
                    
                    @endauth
                        
                            
                    </div>
                        
                @endif
                    
                

  
    </div>
</body>
</html>



@endsection