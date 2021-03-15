@extends('EB.BI.BO.bo_home')
@section('au')

<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets\css\theme.css')}}">
    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Construction d'un nouveau Rapport</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
 
</head>
<body>
<div style="color: #2B2D3B; font-size: 13px; font-weight: bolder; margin-left: 800px;">Bo > Buisiness Objects > Create Rapport</div>
    <div class="container" style=" width: 600px;margin-left: 200px;">
        
       
       
        <p class="h2"style="margin-left: 150px;">Nouveau Rapport </p><br>
        @include('partieflash.flash')
            <div class="form-group">
             <form class="signup" action="{{ url('/bo_r')}}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Objectif du besoin:<a style="color: red;">*</a></label>
                    <textarea rows="2" cols="600" name="object"  class ="form-control" required placeholder="Entrer l'Objectif du besoin"></textarea>
                    <span class="Error"></span>
                </div>
                <div class="form-group">
                    <label>Noms des Rapports Proposés:<a style="color: red;">*</a></label>
                    <textarea rows="2" cols="100" name="n_rapport"   class ="form-control" required placeholder="Entrer Nom Rapport:"></textarea>
                    <span class="Error"></span>
                </div>
                
                <label>Univers :  <a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="univers" required placeholder="Entrer Univers"/>
                <span class="Error"></span>

                <label>Champs à extraires :<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="c_extraires" required placeholder="Entrer Champs"/>
                <span class="Error"></span>

                <label>Filtres à appliquer :<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="filtres" required placeholder=" Filtres à appliquer"/>
                <span class="Error"></span> 
                 
                <label>Liste de diffusion:<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="liste_d" required placeholder="Entrer Liste de diffusion"/>
                <span class="Error"></span>

                <label>Planification :<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="planification" required placeholder="Entrer Planification"/>
                <span class="Error"></span>

                <label>Serveur d'enregistrement :<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="serveur" required placeholder="Entrer Serveur d'enregistrement"/>
                <span class="Error"></span>
            </div>

          

  </div>
</div>


            <br>
            {{ csrf_field() }}
            <div class="form-group" style=" width: 400px;margin-left: 550px;">
                <input class="btn btn-primary btn-block" type="submit" value="create"/>
            </div>
        </form>
    </div>
  </body>
</html>

@endsection
