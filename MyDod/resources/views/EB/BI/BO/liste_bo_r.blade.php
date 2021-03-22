@include('layouts.app')
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
    <title>BO</title>
</head>
<body>
         
<div class="container">

  <form class="form-inline my-2 my-lg-0" >
  
  </form>
      <h1 style="text-align: center; color: black; font-weight: bolder;"> Liste des Planification et MAJ</h1>
      
     @include('partieflash.flash')
        
    <div class="col-md-12">
    <div class ="row">
    <div>
        
        <a href="/ConsulatationEB" class="btn btn-success" style="background-color: black;" > <  </a>
       </div>
         
     
<table class="table table-striped" >
  <thead>
    <tr>
      <th scope="col"></th>
      
      <th scope="col" style="text-align: center;max-width:10px;" >Titre</th>
      <th scope="col"style="text-align: center;">Nom Rapport</th>
      <th scope="col"style="text-align: center;">Chemin d'accès</th>
      <th scope="col"style="text-align: center;">Date de Creation</th>
      <th scope="col"  >&nbsp;&nbsp;Etat</th>

  </thead>
  <tbody>
    <tr>

   
    @foreach($ic as $i)
      <th scope="row"></th>
      
        @if($i->titre=='Mis à jour')
      <td style="text-align: center;">Mis à jour BO</td>
      @else 
      <td style="text-align: center;">Planification BO</td>
      @endif
      <td style="text-align: center;">{{$i->n_rapport}}</td>
      <td style="text-align: center;">{{$i->chemin}}</td>
      <td style="text-align: center;">{{$i->created_at}}</td>

      
      @if($i->etat=='Nouveau')
      <td style="color: green; " style="text-align: center;">{{$i->etat}}</td>
      @endif

      @if($i->etat=='Clos')
      <td style="color: red;" style="text-align: center;">{{$i->etat}}</td>
      @endif

      @if($i->etat=='En cours')
      <td style="color: orange;" style="text-align: center;">{{$i->etat}}</td>
      @endif

      

      <td style="text-align: center;">
         
            <form action="/liste_bo_r/{{$i->id}}" method="post" >
                 
           @if($i->etat=='Clos')
           
           <a class="btn btn-primary" href="/liste_bo_r/{{$i->id}}/details_bo_r">Details</a>

            @else
            <a class="btn btn-primary" href="/liste_bo_r/{{$i->id}}/details_bo_r">Details</a>

            
            <a href="/liste_bo_r/{{$i->id}}/editer_bo_r" class="btn btn-light" style="color:black">Editer</a>
         

            


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
</div></div>
</body>
</html>