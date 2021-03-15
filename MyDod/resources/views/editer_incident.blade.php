@include('layouts.app')
<br>
<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">

    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modification d'un incendit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>

</script>
</head>
<body>
    
<div class="form-group" style="width: 800px; margin-left: 350px;" >
        <form class="signup" action="/liste_incident/{{$ic->id}}" method="Post"  >
         <input type="hidden" name="_method" value=PUT>
        <p class="h2 text-center">Modification d'un Incendit</p><br>

            <div class="form-group">
            
                <label>Objet:</label>
                <input class="form-control"  type="text" name="objet" required placeholder="Entrer votre Objet" value="{{$ic->objet}}"/>
                <span class="Error"></span>
            </div>

            <div class="form-group">
                <label>Description:</label>
                <textarea rows="3"  cols="100" name="Description" class ="form-control" required placeholder="Description">{{$ic->Description}}</textarea>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Criticité:</label><br/>
                <label><input type="radio" name="criticite" required value="Faible" checked /> Faible</label><br>
                <label><input type="radio" name="criticite" required value="Moyen" /> Moyen</label><br>
                <label><input type="radio" name="criticite" required value="Urgent" /> Urgent</label><br>
                <span class="Error"></span>
            </div>


            
            {{ csrf_field() }}
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value="Editer"/>
            </div>
        </form>
    <div>
  </body>
</html>

