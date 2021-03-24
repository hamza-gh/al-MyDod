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
    <title>liste de demande droit</title>
</head>
<body>
         
<div class="container">
  <form class="form-inline my-2 my-lg-0">
  
  </form>

      @include('partieflash.flash')
     
        
    <div class="col-md-10">
    <div class ="row">
    
      <h1 style="text-align: center; color: black; font-weight: bolder; text-align: center; margin-left: 400px;"> Liste des Droit</h1><br><br><br>
<table class="table table-striped" style="text-align: center;">

  <thead>
   
    <tr>
      <th scope="col"></th>
      
      <th scope="col">Objet</th>
      <th scope="col">Description</th>
      <th scope="col">Date de Creation</th>
      <th scope="col">Etat</th>
      <th scope="col">Action</th>

     
  </thead>
  <tbody>
    <tr>

   
    @foreach($ic as $i)
      <th scope="row"></th>
      
      <td>{{$i->objet}}</td>
      <td>{{$i->Description}}</td>

      <td>{{$i->created_at}}</td>

      @if($i->etat=='Nouveau')
      <td style="color: green; " style="text-align: center;">{{$i->etat}}</td>
      @endif

      @if($i->etat=='Clos')
      <td style="color: red;" style="text-align: center;">{{$i->etat}}</td>
      @endif

      @if($i->etat=='En cours')
      <td style="color: orange;" style="text-align: center;">{{$i->etat}}</td>
      @endif
      
      
      <td>
            
           
            <form action="/ll_d_droit/{{$i->id}}" method="post">
          
              @if($i->etat=='Clos' || $i->etat=='En cours')
           
              <a class="btn btn-primary" href="/ll_d_droit/{{$i->id}}/details_ll_d_droit">Details</a>&nbsp&nbsp&nbsp&nbsp&nbsp
   
               @else
               <a class="btn btn-primary" href="/ll_d_droit/{{$i->id}}/details_ll_d_droit">Details</a>&nbsp&nbsp&nbsp&nbsp&nbsp
   
            <a href="ll_d_droit/{{$i->id}}/editer_ll_d_droit" class="btn btn-light" style="color:black">Editer</a>&nbsp&nbsp&nbsp&nbsp&nbsp
            
            {{csrf_field()}}
            {{ method_field('DELETE' )}}
            <button type="submit" class="btn btn-danger">Supprimer</button>
            @endif
            </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div></div>
</body>
</html>

@endsection