
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
             
           
 <div class="container" style=" width: 600px;" >
            <div>
             <h1 style="text-align: center; color: black; font-weight: bolder;"> Editer</h1>
        <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a>
       </div>
                <form class="signup" action="/l_d_droit/{{$inc->id}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value=PUT>

                    <div>
                    <br> <label style="font-weight: bolder;">Dossier :<a style="color: red;">*</a></label>
                    <h style="font-size: 13px; font-weight: bolder; margin-left: 310px;">Date de Creation : {{$inc->created_at->day}}/{{$inc->created_at->month}}/{{$inc->created_at->year}}</h></label>
                    <textarea  name="dossier" class ="form-control" required placeholder="Dossier">{{$inc->dossier}}</textarea>
                </div>
            <br>
                    <label style="font-weight: bolder;">Utilisateurs :<a style="color: red;">*</a></label>
                    <textarea rows="5" cols="100" name="Utilisateurs" class ="form-control" required placeholder="Utilisateurs">{{$inc->Utilisateurs}}</textarea>
                    <span class="Error"></span>
               
                
                    
              
                
              
                    
                
      

                <br>
                {{ csrf_field() }}
            <div class="form-group" style=" width: 400px;margin-left: 50px;">
                <input class="btn btn-primary btn-block" type="submit" value="Editer" />
                </div>
            </div>
</form>
            </div>
        
            </body>
            </html>