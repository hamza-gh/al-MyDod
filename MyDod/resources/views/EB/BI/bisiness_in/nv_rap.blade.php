@extends('EB.BI.bisiness_in.home_bi')
@section('bi')

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
<div style="color: #2B2D3B; font-size: 13px; font-weight: bolder; margin-left: 800px;">BI > Buisiness Intelligence > Create Rapport</div>
    <div class="container" style=" width: 600px;margin-left: 200px;">
    @include('partieflash.flash')
        <form class="signup" action="{{ url('/nv_rap')}}" method="post" enctype="multipart/form-data">
       
        <p class="h2"style="margin-left: 150px;">Nouveau Rapport </p><br>
      
            <div class="form-group">
            
                <div class="form-group">
                    <label>Objectif du besoin:<a style="color: red;">*</a></label>
                    <textarea rows="2" cols="600" name="objet"  class ="form-control" required placeholder="Entrer l'Objectif du besoin"></textarea>
                    <span class="Error"></span>
                </div>
                <div class="form-group">
                    <label>Nom Rapport:<a style="color: red;">*</a></label>
                    <textarea rows="2" cols="100" name="nom_rapport"   class ="form-control" required placeholder="Entrer Nom Rapport:"></textarea>
                    <span class="Error"></span>
                </div>
                
                <label>Technologie :<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="technologie" required placeholder="Entrer Technologie"/>
                <span class="Error"></span>

                <label>Catégorie :<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="categorie" required placeholder="Entrer Catégorie"/>
                <span class="Error"></span>

                <label>Cycle de vie :<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="cycle_de_vie" required placeholder="Entrer Cycle de vie"/>
                <span class="Error"></span> 
                 
                <label>Les utilisateurs:<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="utilisateurs" required placeholder="Entrer Les utilisateurs"/>
                <span class="Error"></span>

                <label>Planification :<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="planification" required placeholder="Entrer Planification"/>
                <span class="Error"></span>
            </div>

          
           
            <form>

            <div><a href="{{route('dw')}}">le Fichier pour Construction d’un nouveau Rapport Power BI</a> <br>
            </div><br>
                <h5> Ajouter la Piece jointe<a style="color: red;">*</a></h6>

            

                
                <div class="form-group"></div>
                <input type="file"
                id="avatar" name="pj"
                accept=
                        "application/msword, application/vnd.ms-excel, application/pdf" required >
                        <span class="Error"></span>
                            
                </div>
  </div>
</div>


            <br>
            {{ csrf_field() }}
            <div class="form-group" style=" width: 400px;margin-left: 600px;">
                <input class="btn btn-primary btn-block" type="submit" value="create"/>
            </div>
        </form>
        
    </div>
  </body>
</html>

@endsection
