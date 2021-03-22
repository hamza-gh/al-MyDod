
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
                <title>editer une anomalie ou mis ajour</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>

<style>
    label{
        font-weight: bolder;
    }
</style>
            </head>
            <body>

            <h1 style="text-align: center; color: black; font-weight: bolder;"> {{$inc->titre}}</h1>
            <div class="form-group" style=" width: 600px;margin-left: 500px;" >
            <div>
            <p class="h2"style="margin-left: 180px;">Editer une Analyse </p>
        <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a>
       </div>
       <form class="signup" action="/liste_analyse/{{$inc->id}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value=PUT>
       <br>
       
       @include('partieflash.flash')
           <div class="form-group">
           
                  
           <label>Projet :</label><br>
                <input class="form-control"  type="text" name="projet" required placeholder="Entrer Nom Projet" value="{{$inc->projet}}"/>
                <span class="Error"></span>
            </div>

              
               <label>Typologie :</label>
               <input class="form-control"  type="text" name="typologie" required placeholder="Entrer Typologie" value="{{$inc->typologie}}"/><br><br>
               <span class="Error"></span>

               <div class="form-group">
                <label>Descriptif d'analyse :</label><br>
                <textarea rows="5" cols="100" name="Descriptif"  
                class ="form-control" required placeholder="Entrer Descriptif" >{{$inc->Descriptif}}</textarea>
                <span class="Error"></span>
            </div>
           </div>
           </div>

         
         


       
 </div>
</div>


           <br>
           {{ csrf_field() }}
           <div class="form-group" style=" width: 400px;margin-left: 600px;">
               <input class="btn btn-primary btn-block" type="submit" value="Editer"/>
           </div>
       </form>
            </div>

            </body>
            </html>