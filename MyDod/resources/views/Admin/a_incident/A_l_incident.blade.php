@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets\css\login.css')}}">

<link rel="stylesheet" href="{{asset('assets\css\fontawesome.min.css')}}">
   

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$cpt=1}}</title>
    <title>{{$cptt=1}}</title>
    <title>{{$cpttt=1}}</title>
   
   <style>
       ::-webkit-scrollbar {
                     background: whitesmoke;
                     width: 10px;
                    }
        ::-webkit-scrollbar-thumb {
                                background: #5a5a5a;
                                border-radius: 30px;
                                }
        ::-webkit-scrollbar-thumb:hover {
                                        background: #1b1a1a;
                                        }
        ::-webkit-scrollbar-track {
                                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
                                background-color: rgb(255, 255, 255);
                                }
        table {
            margin-right: 20px;

        }
        td{
            font-weight:bold;
        }
   </style>
</head>
<body >

    
        
        <div class="container">

           <!--<div> <label style="margin-left: 15px; color: green;font-weight: bolder;"> Nouveau : </label>
                 <label style="margin-left:  180px; color: orange;font-weight: bolder;" >En cours : </label>  
                <label style="margin-left: 240px; color: red; font-weight: bolder;">Clos : </label> </div>--> 
   
       
<h1 style="color: black; font-weight: bolder; " >Liste des incidents :</h1>
                    <div class="container">
                    <table class="table table-striped " style=" text-align: center; width: 1000px;" >
                        <thead>
                            
                       
                        
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: green; " >Nouveau</th>
                            <th scope="col" style="text-align: center;" >Objet</th>
                            <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                    
                        <tr >

                            
                        @foreach($liste_incident_n as $liste_incident_n)
                        
                        <td>{{$cpt++}}</td>
                        <td>{{$liste_incident_n->objet}}</td>
                        <td>{{$liste_incident_n->name}}</td>
                        

                        <td style="color: green; ">{{$liste_incident_n->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="liste_incident/{{$liste_incident_n->id}}/details_incident">Détails</a>
                        </td>
                        
                        </tr>
                        @endforeach
                        <label style=" color: green;font-weight: bolder;margin-left: 860px;
                         border: black 2px solid; width: 140px; height: 35px; border-radius: 20px; font-size: 20px;">&nbsp; Nouveau : {{$cpt++-1}}
                    </tbody>
            
                    </table>
                </div>
           
<br>
                <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center; overflow-y:scroll; width: 1000px;">
                        <thead>
                        
                        
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: orange;"  >En cours</th>
                            <th scope="col" style="text-align: center;" >Objet</th>
                            <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_incident_e as $liste_incident_e)
                        
                        <td>{{$cptt++}}</td>
                        <td>{{$liste_incident_n->objet}}</td>
                        <td>{{$liste_incident_e->name}}</td>
                        

                        <td style="color: orange; ">{{$liste_incident_e->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_incident/{{$liste_incident_e->id}}/details_incident">Détails</a>
                        </td>
                        
                        </tr>
                        @endforeach
                        <label style="margin-left: 15px; color: orange;font-weight: bolder;margin-left: 860px;
                         border: black 2px solid; width: 140px; height: 35px; border-radius: 20px; font-size: 20px;">&nbsp;&nbsp; En cours :{{$cptt++-1}}
                    </tbody>
            
                    </table>
                </div>

            <br>
                    <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center; width: 1000px;">
                        <thead>
                                                
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: red;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clos</th>
                            <th scope="col" style="text-align: center;" >Objet</th>
                            <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_incident_c as $liste_incident_c)
                        
                        <td>{{$cpttt++}}</td>
                        <td>{{$liste_incident_n->objet}}</td>
                        <td>{{$liste_incident_c->name}}</td>
                        

                        <td style="color: red; ">{{$liste_incident_c->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_incident/{{$liste_incident_c->id}}/details_incident" >Détails</a>
                        </td>
                        
                        </tr>
                        @endforeach
                        <label style="margin-left: 15px; color: red;font-weight: bolder; margin-left: 910px; 
                        border: black 2px solid; width: 90px; height: 35px; border-radius: 20px; font-size: 20px;"> &nbsp;Clos :{{$cpttt++-1}}
                    </tbody>
            
                    </table>
                </div>
            
        </div>

        
         

         </body>
         <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
         <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>
         <script src="{{asset('assets\resources\js\fontawesome.min.js')}}"></script>
         </html>
         
         @endsection