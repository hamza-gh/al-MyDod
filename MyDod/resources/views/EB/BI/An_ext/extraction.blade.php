@extends('EB.BI.an_ext.an_home')
@section('an_ext')

<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets\css\theme.css')}}">
    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Extraction</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
 
</head>
<body>

    <div class="container" style=" width: 600px;margin-left: 200px;">
        
    <form class="signup" action="{{ url('/extraction')}}" method="post" enctype="multipart/form-data">
       <br>
       <p class="h2"style="margin-left: 200px;">Extraction </p><br>
       @include('partieflash.flash')
           <div class="form-group">
           
                  
           <label>Type de données :<a style="color: red;">*</a></label><br>
                <input class="form-control"  type="text" name="Type_d" required placeholder="Entrer Type de données"/>
                <span class="Error"></span>
            </div>

              
               <label>Source de données :<a style="color: red;">*</a></label>
               <input class="form-control"  type="text" name="Source_d" required placeholder="Entrer Source de données"/><br><br>
               <span class="Error"></span>

               <div class="form-group">
                <label>Descriptif :<a style="color: red;">*</a></label><br>
                <textarea rows="5" cols="100" name="Descriptif"  
                class ="form-control" required placeholder="Entrer Description"></textarea>
                <span class="Error"></span>
            </div>
           </div>
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
