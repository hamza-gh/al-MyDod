@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets\css\login.css')}}">
<link rel="stylesheet" href="{{asset('assets\css\fontawesome.min.css')}}">
    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\fontawesome.min.js')}}"></script>

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
   </style>
</head>
<body >
        <div style=" display: inline-flex; overflow-x: scroll; height:100%;width: 100%; " >

                    <div >
                    <table class="table table-striped " style=" text-align: center; width: 400px;" >
                        <thead>
                            
                       
                        
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: green;" >Incident</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                    
                        <tr >

                            
                        @foreach($liste_incident_n as $liste_incident_n)
                        <td>{{$cpt++}}</td>
                        
                        <td>{{$liste_incident_n->name}}</td>
                        

                        <td style="color: green; ">{{$liste_incident_n->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="liste_incident/{{$liste_incident_n->id}}/details_incident">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>
           

                <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center; overflow-y:scroll;width: 400px;">
                        <thead>
                        
                        
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: orange;"  >Incident</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_incident_e as $liste_incident_e)
                        
                        <td>{{$cptt++}}</td>
                        
                        <td>{{$liste_incident_e->name}}</td>
                        

                        <td style="color: orange; ">{{$liste_incident_e->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_incident/{{$liste_incident_e->id}}/details_incident">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>

            
                    <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center;width: 400px;">
                        <thead>
                                                
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: red;"  >Incident</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_incident_c as $liste_incident_c)
                        
                        <td>{{$cpttt++}}</td>
                        
                        <td>{{$liste_incident_c->name}}</td>
                        

                        <td style="color: red; ">{{$liste_incident_c->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_incident/{{$liste_incident_c->id}}/details_incident">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>
            
            <div>

        
         

         </body>
         </html>
         
         @endsection