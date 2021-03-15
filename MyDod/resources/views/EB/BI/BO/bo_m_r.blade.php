@extends('EB.BI.BO.bo_home')
@section('au')

<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets\css\theme.css')}}">
    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anomalie & MAJ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    
.topnav {
    padding: 6px 8px 6px 16px;
    
    font-size: 20px;
    color: #2B2D3B;
}

.topnav:focus
{
    color: royalblue;
    
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-bottom: 3px solid red;
}

.topnav a.active {
  border-bottom: 3px solid red;
}
</style>
<body>
<div style="color: #2B2D3B; font-size: 13px; font-weight: bolder; margin-left: 800px;">BI > Business Intelligence > Anomalie ou MAJ</div>
    <div class="container" style=" width: 600px;margin-left: 200px;">
        
        
       
            <br><br><br><br>
            @include('partieflash.flash')
        <nav class="nav nav-tabs " >
            <a class="nav-item nav-link .active" href="#p0" data-toggle="tab" ></a>
            <a class="nav-item nav-link topnav" href="#p1" data-toggle="tab" style="font-size: xx-large; font-weight: bolder; " >Modification</a>
            <a class="nav-item nav-link topnav" href="#p2" data-toggle="tab" style="font-size: xx-large; margin-left: 100px; font-weight: bolder;" >Planification</a>
          </nav>
          <div class="tab-content" >
            <div class="tab-pane active" id="p0"></div>
            <div class="tab-pane" id="p1" style="background-color: transparent;">
                <div class="form-group" >
                <form class="signup" action="{{ url('/bo_m_r')}}" method="post" enctype="multipart/form-data">
                 <br>
                <label>Nom Rapport:<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="n_rapport" required placeholder="Entrer votre Nom Rapport"/>
                <span class="Error"></span>

                <label>Chemin d'accès:<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="chemin" required placeholder="Entrer votre Chemin d'accès"/>
                <span class="Error"></span>
</div>
                
               <div class="form-group">
                    <label>Description:<a style="color: red;">*</a></label>
                    <textarea rows="2" cols="100" name="description"   class ="form-control" required placeholder="Entrer Description:"></textarea>
                    <span class="Error"></span>
                </div>
                
                {{ csrf_field() }}
            <div class="form-group" style=" width: 400px;margin-left: 70px;">
                <input class="btn btn-primary btn-block" type="submit" value="Ajouter une Modification" name="m"/>
            </div>
</form>
            </div>
            <div class="tab-pane" id="p2" style="background-color: transparent;">
                <br>
                <form class="signup" action="{{ url('/bo_m_r')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    
                <label>Nom Rapport:<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="n_rapport" required placeholder="Entrer votre Nom Rapport"/>
                <span class="Error"></span>

                <label>Chemin d'accès:<a style="color: red;">*</a></label>
                <input class="form-control"  type="text" name="chemin" required placeholder="Entrer votre Chemin d'accès"/>
                <span class="Error"></span>
</div>
                <div class="form-group">
                    <label>Description:<a style="color: red;">*</a></label>
                    <textarea rows="2" cols="100" name="description"   class ="form-control" required placeholder="Entrer Description:"></textarea>
                    <span class="Error"></span>
                </div>
                {{ csrf_field() }}
            <div class="form-group" style=" width: 400px;margin-left: 70px;">
                <input class=" btn-primary btn-block" type="submit" value="Ajouter Planification" name="p"/>
            </div>
</form>
            </div>
            </div>
          </div>
          

          
          
               
                            
                </div>
                        </div>
                        </div>
            <br>
            
        </form>

    </div>
  </body>
</html>

@endsection
