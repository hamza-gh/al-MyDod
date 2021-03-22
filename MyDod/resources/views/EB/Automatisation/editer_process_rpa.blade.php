@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets\css\theme.css')}}">
    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
 
</head>
<body>

    <div class="container" style=" width: 600px;margin-left: 500px;">
        
        <form class="signup" action="/liste_process_rpa/{{$i->id}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value=PUT>

        <p class="h2"style="margin-left: 150px;">Editer Process RPA </p><br>
        
            <div class="form-group">
            
                <div class="form-group">
                    <label>Objectif de votre Besoin :<a style="color: red;">*</a></label>
                    <textarea rows="2" cols="600" name="Objectif"  class ="form-control" 
                    required placeholder="Entrer Objectif de votre Besoin " >{{$i->Objectif}}</textarea>
                    <span class="Error"></span>
                </div>
                <div class="form-group">
                    <label>Processus Utilisé Actuellement :<a style="color: red;">*</a></label>
                    <textarea rows="2" cols="100" name="Processus"   class ="form-control"
                     required placeholder="Enntrer Processus Utilisé Actuellement " >{{$i->Processus}}</textarea>
                    <span class="Error"></span>
                </div>
                
                <label>Le Processus Actuel occupe combien d'ETP ?  :<a style="color: red;">*</a></label>
                <input id="balloons" type="number" name="Processus_etp"  min="1" required style="width: 80px;" value="{{$i->Processus_etp}}">
                
                <span class="Error"></span>
                <br><br>

                <label>Fonctionnalités de l'automatisation  :<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="Fonctionnalites" 
                required placeholder="Entrer Fonctionnalités de l'automatisation " value="{{$i->Fonctionnalites}}"/>
                <span class="Error"></span>

                <label>Planification :<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="Planification" required placeholder="Planification" value="{{$i->Planification}}"/>
                <span class="Error"></span> 
                 
                <label>Canal  d'envoi :<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="Canal" required placeholder="Entrer Canal  d'envoi"
                 value="{{$i->Canal}}"/>
                <span class="Error"></span>

                <label>Utilisateurs :<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="Utilisateurs" required placeholder="Entrer les Utilisateurs"
                 value="{{$i->Utilisateurs}}"/>
                
            </div>

          
           
            <form>

        
               

            

                
              
  </div>
</div>


            <br>
            {{ csrf_field() }}
            <div class="form-group" style=" width: 400px;margin-left: 550px;">
                <input class="btn btn-primary btn-block" type="submit" value="Editer"/>
            </div>
        </form>
    </div>
  </body>
</html>

@endsection