
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


            </head>
            <body>

            <h1 style="text-align: center; color: black; font-weight: bolder;"> {{$inc->titre}}</h1>
            <div class="container" style=" width: 600px;" >
           
        
        <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a>
       
                <form class="signup" action="/liste_ano_maj/{{$inc->id}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value=PUT>

                    <div  class="form-group" style=" width: 600px;">
                    <br><label style="font-weight: bolder;">Nom Rapport:<a style="color: red;">*</a>
                    <h style="font-size: 13px; font-weight: bolder; margin-left: 280px;">Date de Creation : {{$inc->created_at->day}}/{{$inc->created_at->month}}/{{$inc->created_at->year}}</h></label>
                    <textarea rows="2" cols="100" name="nom_rapport"   class ="form-control" required placeholder="Entrer Nom Rapport:">{{$inc->nom_rapport}}</textarea>
                    <span class="Error"></span>
                </div>
                
                <div class="form-group" style=" width: 600px;">
                    <label style="font-weight: bolder;">Description:<a style="color: red;">*</a></label>
                    <textarea rows="8" cols="100" name="description"   class ="form-control" required placeholder="Entrer Description:">{{$inc->description}} </textarea>
                    <span class="Error"></span>
                    
                </div>
              
                    
                
      

                <br>
                {{ csrf_field() }}
            <div class="container" style=" width: 400px;">
                <input class="btn btn-primary btn-block" type="submit" value="Editer" />
            </div>
</form>
            </div>

            </body>
            </html>