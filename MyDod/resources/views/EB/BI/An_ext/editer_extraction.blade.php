
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

            <div class="container" style=" width: 600px;" >
            <
            <p class="h2"style="margin-left: 140px;">Editer une Extraction </p>
        <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a>
       <br>
       <form class="signup" action="/liste_extraction/{{$inc->id}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value=PUT>
       <br>
       
       @include('partieflash.flash')
           <div class="form-group">
           
                  
           <label>Type de données :</label><br>
                <input class="form-control"  type="text" name="Type_d" required placeholder="Entrer Nom Projet" value="{{$inc->Type_d}}"/>
                <span class="Error"></span>
            </div>

              
               <label>Source de données:</label>
               <input class="form-control"  type="text" name="Source_d" required placeholder="Entrer Typologie" value="{{$inc->Source_d}}"/><br><br>
               <span class="Error"></span>

               <div class="form-group">
                <label>Descriptif :</label><br>
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
           <div class="container" style=" width: 400px;">
               <input class="btn btn-primary btn-block" type="submit" value="Editer"/>
           </div>
       </form>
            </div>

            </body>
            </html>