@include('layouts.app')


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
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #111;
}

.right {
  right: 0;
  background-color: red;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
<body><br><br>

    <div class="container" style=" width: 600px;margin-left: 0px;">
        
      <h1 style="font-size: 30px; font-weight: bolder; color: red; margin-left: 350px;">Bi</h1>
       <br>
           
           
        <nav class="nav nav-tabs " style="width: 800px;">
            
            <a class="nav-item nav-link topnav" href="#p1" data-toggle="tab" style="font-size: 16px; font-weight: bolder; " >Business Intelligence</a>
            <a class="nav-item nav-link topnav" href="#p2" data-toggle="tab" style="font-size: 16px; margin-left: 100px; font-weight: bolder;" >SAP Buisiness Objects</a>
            <a class="nav-item nav-link topnav" href="#p2" data-toggle="tab" style="font-size: 16px; margin-left: 100px; font-weight: bolder;" >Analyse & Extraction</a>
        
          </nav>
          <div class="tab-content" >
            
            <div class="tab-pane" id="p1" style="background-color: transparent;">
              <a href="/ConsulatationEB-list-bi-rapport">liste du bi</a>

            </div>
            <div class="tab-pane" id="p2" style="background-color: transparent;">
                <br>
              
            </div>
          </div>
        </div>
        
  </div>
 </div>
</div>
            <br>
            
        ..

    </div>
  </body>
</html>

