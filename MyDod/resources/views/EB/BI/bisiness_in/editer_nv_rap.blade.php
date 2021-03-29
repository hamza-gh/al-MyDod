
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

            <form class="signup" action="/liste_bi_rapports/{{$inc->id}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value=PUT>

            <div class="container" style=" width: 600px;" >
                
                    <h1 style="text-align: center; color: black; font-weight: bolder;"> Éditer un Rapport </h1>
                    <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a>
                   
            
                  <div class="form-group" style=" width: 600px;">
                    <br><label style="font-weight: bolder;" >Objet:
                    <h style="font-size: 13px; font-weight: bolder; margin-left: 360px;">Date de Creation : {{$inc->created_at->day}}/{{$inc->created_at->month}}/{{$inc->created_at->year}}</h></label>
                    <textarea rows="2" cols="100" name="objet"   class ="form-control" 
                    required placeholder="Entrer Nom Rapport:" style="width: 600px;" >{{$inc->objet}}</textarea>
                    <span class="Error"></span>
                </div>
                
                <div class="form-group" style=" width: 600px;">
                    <label style="font-weight: bolder;">Nom Rapport:
                    <textarea rows="3"  name="nom_rapport"   class ="form-control" style=" width: 600px;"
                    required placeholder="Entrer Description:" >{{$inc->nom_rapport}} </textarea>
                    <span class="Error"></span>
                    </div>

                    
            <div class="form-group" style=" width: 600px;">
            
                <label>Technologie :</label>
                <textarea class="form-control"  type="text" name="technologie" required placeholder="Entrer votre Objet">{{$inc->technologie}}</textarea>
                <span class="Error"></span>
            </div>

        
            <div class="form-group" style=" width: 600px;">
            
                <label>Catégorie :</label><br>
                <textarea class="form-control"  type="text" name="categorie" required placeholder="Entrer votre Objet" >{{$inc->categorie}}</textarea>
                <span class="Error"></span>
            </div>
            <div class="form-group" style=" width: 600px;">
            
                <label>Cycle de vie :</label>
                <textarea class="form-control"  type="text" name="cycle_de_vie" required placeholder="Entrer votre Objet" >{{$inc->cycle_de_vie}}</textarea>
                <span class="Error"></span>
            </div>
            <div class="form-group" style=" width: 600px;">
            
                <label>Les utilisateurs :</label>
                <textarea class="form-control"  type="text" name="utilisateurs" required placeholder="Entrer votre Objet" >{{$inc->utilisateurs}}</textarea>
                <span class="Error"></span>
            </div>
            
            <div class="form-group" style=" width: 600px;">
            
                <label>Planification :</label>
                <textarea class="form-control"  type="text" name="planification" required placeholder="Entrer votre Objet"> {{$inc->planification}}</textarea>
                <span class="Error"></span>
            </div>
         
             
               
  

             
            <br>

            {{ csrf_field() }}
            <div class="container" style=" width: 400px;">
                <input class="btn btn-primary btn-block" type="submit" value="Editer" />
            </div>
</form>
            </body>
            </html>