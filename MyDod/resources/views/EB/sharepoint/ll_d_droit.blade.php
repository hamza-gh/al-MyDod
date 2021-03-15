
<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets\css\theme.css')}}">
    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste de demande droit</title>
</head>
<body>
         
<div class="container">
  <form class="form-inline my-2 my-lg-0">
  
  </form>

      @include('partieflash.flash')
     
        
    <div class="col-md-10">
    <div class ="row">
    <div>
        
        <a href="/dd_droit" class="btn btn-success" style=" margin-left: 759px;" >+ Nouvelle liste demande de droit </a>
         </div>
         
     
<table class="table table-striped" >
  <thead>
    <tr>
      <th scope="col"></th>
      
      <th scope="col">Objet</th>
      <th scope="col">Description</th>
      <th scope="col">Date de Creation</th>
      <th scope="col">Action</th>

     
  </thead>
  <tbody>
    <tr>

   
    @foreach($ic as $i)
      <th scope="row"></th>
      
      <td>{{$i->objet}}</td>
      <td>{{$i->Description}}</td>
      <th scope="row">{{$i->created_at}}</th>
      <td>
            
           
            <form action="/ll_d_droit/{{$i->id}}" method="post">
          

            <a href="ll_d_droit/{{$i->id}}" class="btn btn-light" style="color:black">Editer</a>&nbsp&nbsp&nbsp&nbsp&nbsp
            
            {{csrf_field()}}
            {{ method_field('DELETE' )}}
            <button type="submit" class="btn btn-danger">Supprimer</button>
            
            </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div></div>
</body>
</html>

