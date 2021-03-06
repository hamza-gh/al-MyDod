@extends('EB.BI.bisiness_in.home_bi')
@section('bi')




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Construction d'un nouveau Rapport</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
 <style>
     label{
         font-weight: bolder;
     }
     .bib{
         font-weight: bold;
         font-size: 15px;
         color: black;
     }
    
 </style>
</head>
<body>
  

    <div class="container" style=" width: 600px;">
  <div style="color: #2B2D3B; font-size: 13px; font-weight: bolder; text-align: right;"><a href="/home_eb" class="bib">BI</a> ><a class="bib"> Power BI </a>><a class="bib"> Create Rapport</a></div><br>

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

                
                <div class="form-group">
                <label>Technologie :<a style="color: red;">*</a></label>
                <textarea rows="2" cols="100" class="form-control"  type="text" name="technologie" required placeholder="Entrer Technologie"></textarea>
                <span class="Error"></span>
                </div>

                

                <div class="form-group">
                <label>Cat??gorie :<a style="color: red;">*</a></label>
                <textarea rows="2" cols="100" class="form-control"  type="text" name="categorie" required placeholder="Entrer Cat??gorie"></textarea>
                <span class="Error"></span>
                </div>
                
                <div class="form-group">
                <label>Cycle de vie :<a style="color: red;">*</a></label>
                <textarea rows="2" cols="100" class="form-control"  type="text" name="cycle_de_vie" required placeholder="Entrer Cycle de vie"></textarea>
                <span class="Error"></span> 
                </div>
                
                <div class="form-group">
                <label>Les utilisateurs:<a style="color: red;">*</a></label>
                <textarea rows="2" cols="100" class="form-control"  type="text" name="utilisateurs" required placeholder="Entrer Les utilisateurs"></textarea>
                <span class="Error"></span>
                </div>
                
                <div class="form-group">
                <label>Planification :<a style="color: red;">*</a></label>
                <textarea rows="2" cols="100" class="form-control"  type="text" name="planification" required placeholder="Entrer Planification"></textarea>
                <span class="Error"></span>
            </div>

          
           
            <form>

            <div><a href="{{route('cahier_charge_bi')}}" style="color: red; text-align: center; font-size: x-large;  text-decoration: none;"><span style="text-decoration: underline;"> T??lecharger le mod??le ?? remplir</span> *</a> <br>
            </div><br>
                <h6> Merci d'ajouter le mod??le en PJ<a style="color: red;">*</a></h6>

            

                
                <div class="form-group"></div>
                <input type="file"
                id="avatar" name="pj"
                accept=
                        ".xlsx" required >
                        <span class="Error"></span>
                            
                </div>
  </div>
</div>


            <br>
            {{ csrf_field() }}
            <div class="container" style=" width: 400px;">
                <input class="btn btn-primary btn-block" type="submit" value="Soumettre"/>
            </div>
        </form>
        
    </div>
  </body>
</html>

@endsection
