@extends('EB.home_eb')
@section('list')
        <link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">
       
        <link rel="stylesheet" href="{{asset('assets\css\theme.css')}}">
            <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
            <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <br><br>
    <meta charset="UTF-8">
    <title>Demande Droit</title>
    <style>
        label{
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <div class="container"  >
       

        <form class="signup" action="{{ url('/l_d_droit')}}" method="post">
       
     
        </div><p class="h2" style="margin-left: 400px;">Demande Droit</p><br>
            
    

        <div class="form-group" style=" width: 500px;margin-left: 250px;">
            <label style="font-size: 20px;">Dossier :<a style="color: red;">*</a></label>
            <textarea  name="dossier" class ="form-control" required placeholder="Dossier"></textarea>
            <span class="Error"></span>
        </div>

            <div class="form-group" style=" width: 500px;margin-left: 250px;">
                <label style="font-size: 20px;">Utilisateurs :<a style="color: red;">*</a></label>
                <textarea rows="5" cols="100" name="Utilisateurs" class ="form-control" required placeholder="Entrer la liste des utilisateurs"></textarea>
                <span class="Error"></span>
            </div>
            
           
            <form>
           

            
            {{ csrf_field() }}
            <div class="form-group" style=" width: 300px;margin-left: 320px;">
                <input class="btn btn-primary btn-block" type="submit" value="create"/>
            </div>
        </form>
    </div>
  </body>
</html>

@endsection