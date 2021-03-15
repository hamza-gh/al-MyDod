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
    
</head>
<body>

            <h1 style=" margin-left: 700px; color: black; font-weight: bold;">Details</h1>
<div class="container"  style="width: 800px;">
    <div class="col-md-12">
    <div class ="row">



<head>
    <meta charset="UTF-8">
    <title>Detail incendit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>

</head>
<body>
    <div >
      
        
      <br>

            <div class="form-group">
            
                <label >Objet :</label>
                <label class="form-control">{{$ic->objet}}<label>
                <span class="Error"></span>
            </div>
            

            <div class="form-group">
                <label>Description :</label>
               
                <textarea readonly rows="3"  cols="100" name="Description" class ="form-control"  required placeholder="Description">{{$ic->Description}}</textarea>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Criticité :</label>
                <label class="form-control"> {{$ic->criticité}}</label>
                <span class="Error"></span>
            </div>
            <div class="form-group">
            
                <label >Date de Cration :</label>
                <label class="form-control">{{$ic->created_at}}<label>
                <span class="Error"></span>
            </div>
           


            
          
        </form>
    </div>
  </body>
</html>

    
    </div>
    </div>
    </div>

    
</body>
</html>