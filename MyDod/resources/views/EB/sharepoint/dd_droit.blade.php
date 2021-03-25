@extends('EB.home_eb')
@section('list')
<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets\css\theme.css')}}">
    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creation une Liste demande de droit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <style>
        label{
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <div class="container" style=" width: 500px;margin-left: 250px;">
       
        
        <form class="signup" action="{{ url('/ll_d_droit')}}" method="post" enctype="multipart/form-data">
       
        <br><p class="h2 text-center">Créer une liste SP</p><br>
      
           
            <div class="form-group">
                <label>Nom de la Liste :<a style="color: red;">*</a></label>
                <textarea name="nom_l" class ="form-control" required placeholder="Entrer le nom de la liste"></textarea>
                <span class="Error"></span>
            </div>

            <div class="form-group">
                <label>Utilisateurs:<a style="color: red;">*</a></label>
                <textarea rows="5" cols="100" name="utilisateur" class ="form-control" required placeholder="Entrer la liste des utilisateurs"></textarea>
                <span class="Error"></span>
            </div>
           
            <form>

      
                <h5> Ajouter une Piece jointe<a style="color: red;">*</a></h6>

            

                
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
