@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets\css\login.css')}}">
    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste incident</title>
    <style>
      td{
        font-weight:normal;
         
      }
      th{
        font-size: 20px;
      }
    </style>
</head>
<body>
         
<div class="container" >
  <form class="form-inline my-2 my-lg-0" >
  
  </form>

      @include('partieflash.flash')
     
        
    <div class="col-md-12">
    <div class ="row">
    <div>
      <h1 style="color: black; font-weight: bold; text-align: center;">Liste des Incidents</h1>
    <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a>
        <a href="/c_incident" class="btn btn-success" style=" margin-left: 944px;" >+ Nouveau Incident </a>
         </div>
         
     
<table class="table table-striped" style="text-align: center;">
  <thead>
    <tr>
      <th scope="col"></th>
      
      <th scope="col" style="text-align: center;max-width:10px;" >Objet</th>
      <th scope="col"style="text-align: center;">Criticité</th>
      <th scope="col"style="text-align: center;">Date de Creation</th>
      <th scope="col" style="text-align: center;">Etat</th>
      <th scope="col" style="text-align: center;">Action</th>

  </thead>
  <tbody>
    <tr>

   
    @foreach($ic as $i)
      <th scope="row"></th>
      
      <td>{{$i->objet}}</td>
      <td>{{$i->criticité}}</td>
      <td>{{$i->created_at}}</td>

      
      @if($i->etat=='Nouveau')
      <td style="color: green; ">{{$i->etat}}</td>
      @endif

      @if($i->etat=='Clos')
      <td style="color: red;">{{$i->etat}}</td>
      @endif

      @if($i->etat=='En cours')
      <td style="color: orange;">{{$i->etat}}</td>
      @endif

      

      <td>
            
           
            <form action="/liste_incident/{{$i->id}}" method="post">

            @if($i->etat=='Clos' || $i->etat=='En cours')
            <a class="btn btn-primary" href="liste_incident/{{$i->id}}/details_incident">Details</a>

            @else
            <a class="btn btn-primary" href="liste_incident/{{$i->id}}/details_incident">Details</a>
            <a href="liste_incident/{{$i->id}}/editer_incident" class="btn btn-light" style="color:black">Editer</a>
           

            
            <button onclick="myFunction()">Suprimmer</button>
            

            <dialog id="myDialog">
            {{csrf_field()}}
            {{ method_field('DELETE' )}}
            <button type="submit" class="btn btn-danger">Supprimer</button>
            </dialog>
            @endif
            </form>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
</body>
<script>
function myFunction() { 

  document.getElementById("myDialog").showModal(); 
} 
</script>
</html>

@endsection