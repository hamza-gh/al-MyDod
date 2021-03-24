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
</head>
<body>
         
<div class="container">
  <form class="form-inline my-2 my-lg-0">
  
  </form>
 
      @include('partieflash.flash')
     
        
    <div class="col-md-10" >
      <h1 style="text-align: center; color: black; font-weight: bolder;"> Liste des Droits</h1>
      
    <div class ="row">
      
    <div>
      
      <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a>
      
       
         </div>
         
     
<table class="table table-striped" style="text-align: center;" >
  <thead>
    <tr>
      <th scope="col"></th>
      
      <th scope="col">Description</th>
      <th scope="col">Etat</th>
      <th scope="col" style="text-align: center;">Action</th>

     
  </thead>
  <tbody>
    <tr>

  
    @foreach($ic as $i)
      <th scope="row"></th>
      
      <td>{{$i->Description}}</td>
      @if($i->etat=='Nouveau')
      <td style="color: green; " style="text-align: center;">{{$i->etat}}</td>
      @endif

      @if($i->etat=='Clos')
      <td style="color: red;" style="text-align: center;">{{$i->etat}}</td>
      @endif

      @if($i->etat=='En cours')
      <td style="color: orange;" style="text-align: center;">{{$i->etat}}</td>
      @endif
      
      
      
      <td style="text-align: center; ">
            
           
            <form action="/l_d_droit/{{$i->id}}" method="post" >
               

           @if($i->etat=='Clos' || $i->etat=='En cours')
           
           <a class="btn btn-primary" href="/l_d_droit/{{$i->id}}/details_l_d_droit">Details</a>

            @else
            <a class="btn btn-primary" href="/l_d_droit/{{$i->id}}/details_l_d_droit">Details</a>

            
            <a href="/l_d_droit/{{$i->id}}/editer_l_d_droit" class="btn btn-light" style="color:black">Editer</a>
         

            


            {{csrf_field()}}
            {{ method_field('DELETE' )}}
            <button type="submit" class="btn btn-danger" >Supprimer</button>
              </div> 
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
</html>

@endsection
