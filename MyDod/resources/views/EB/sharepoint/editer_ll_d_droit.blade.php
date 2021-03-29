
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
            
            <h1 style="text-align: center; color: black; font-weight: bolder;"> Editer</h1>
        <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a><br><br>
     
                <form class="signup" action="/ll_d_droit/{{$inc->id}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value=PUT>

                      <div class="form-group" style="width:670px;">
            
                       <label>Nom de la liste :</label>
                    <h style="font-size: 13px; font-weight: bolder; margin-left: 260px;">Date de Creation : {{$inc->created_at->day}}/{{$inc->created_at->month}}/{{$inc->created_at->year}}</h></label>
                  
        
            <input class="form-control"  type="text" name="nom_l" required placeholder="Entrer votre Nom de la liste" value="{{$inc->nom_l}}" 
            style="text-align: left;"/>
            <span class="Error"></span>
        </div>

        <br> <label style="font-weight: bolder;">Utilisateurs :</label>
        <textarea rows="5" cols="100" name="utilisateur" class ="form-control" required placeholder="Utilisateurs">{{$inc->utilisateur}}</textarea>
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