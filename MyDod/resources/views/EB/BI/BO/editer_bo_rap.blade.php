
@include('layouts.app')
            <link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">

<script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
<script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Details Rapport</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>


            </head>
            <body>
<div>
            <form class="signup" action="/liste_bo_rap/{{$inc->id}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value=PUT>

            <div class="form-group" style=" width: 600px;margin-left: 400px;" >
                <div>
                    <h1 style="text-align: center; color: black; font-weight: bolder;"> Edite d'un rapport BO</h1>
                    <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a>
                   </div>
            
                  
                    <br><label style="font-weight: bolder;" >Objectif du besoin:
                    <h style="font-size: 12px; font-weight: bolder; margin-left: 280px;">Date de Creation : {{$inc->created_at->day}}/{{$inc->created_at->month}}/{{$inc->created_at->year}}</h></label>
                    <textarea rows="2" cols="100" name="object"   class ="form-control" 
                    required placeholder="Entrer Nom Rapport:" >{{$inc->object}}</textarea>
                    <span class="Error"></span>
                </div>
                
                <div class="form-group" style="margin-left: 400px;">
                    <label style="font-weight: bolder;">Noms des Rapports Proposés :
                    <textarea rows="3"  name="n_rapport"   class ="form-control" style=" width: 600px;"
                    required  >{{$inc->n_rapport}} </textarea>
                    <span class="Error"></span>
<br>
                    
            <div class="form-group" style=" width: 700px;">
            
                <label>Univers  :</label><br>
                <input class="form-control"  type="text" name="univers"
                 required placeholder="Entrer votre Objet" value="{{$inc->univers}}" />
                <span class="Error"></span>
            </div>

        
            <div class="form-group" style=" width: 700px;">
            
                <label>Champs à extraires :</label><br>
                <input class="form-control"  type="text" name="c_extraires" required placeholder="Entrer votre Objet" value="{{$inc->c_extraires}}" />
                <span class="Error"></span>
            </div>
            <div class="form-group" style=" width: 700px;">
            
                <label>Filtres à appliquer :</label>
                <input class="form-control"  type="text" name="filtres" required placeholder="Entrer votre Objet" value="{{$inc->filtres}}" />
                <span class="Error"></span>
            </div>
            <div class="form-group" style=" width: 700px;">
            
                <label>Liste de diffusion :</label>
                <input class="form-control"  type="text" name="liste_d" required placeholder="Entrer votre Objet" value="{{$inc->liste_d}}" />
                <span class="Error"></span>
            </div>
            
            <div class="form-group" style=" width: 700px;">
            
                <label>Planification :</label>
                <input class="form-control"  type="text" name="planification" required placeholder="Entrer votre Objet" value="{{$inc->planification}}" />
                <span class="Error"></span>
            </div>
         
             
           
            </div>
         
  

             
            <br>

            {{ csrf_field() }}
            <div class="form-group" style=" width: 400px;margin-left: 480px;">
                <input class="btn btn-primary btn-block" type="submit" value="Editer" />
            </div>
</form>
            </body>
            </html>