@include('layouts.app')

<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets\css\theme.css')}}">
    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title style="font-weight: bolder;">Creation d'un incendit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>

</head>
<body>
    <div class="container" style="width: 700px; ">
       
        <form class="signup" action="{{ url('/liste_incident')}}" method="post">
     
        <p class="h2 text-center">Creation d'un Incident</p><br>

            <div class="form-group">
            
                <label>Objet:</label>
                <input class="form-control"  type="text" name="objet" required placeholder="Entrer votre Objet"/>
                <span class="Error"></span>
            </div>

            <div class="form-group">
                <label>Description:</label>
                <textarea rows="5" cols="100" name="Description" class ="form-control" required placeholder="Description"></textarea>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Criticité:</label><br/>
                <label><input type="radio" name="criticite" required value="Faible" checked /> Faible</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <label><input type="radio" name="criticite" required value="Moyen" /> Moyen</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <label><input type="radio" name="criticite" required value="Urgent" /> Urgent</label><br>
                <span class="Error"></span>
            </div>
            <form>
                

       

            
            {{ csrf_field() }}
            <div class="form-group" style="width: 400px; margin-left: 200px;">
                <input class="btn btn-primary btn-block" type="submit" value="create"/>
            </div>
        </form>
    </div>
  </body>
</html>

