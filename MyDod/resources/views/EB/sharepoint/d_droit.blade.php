@include('layouts.app')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    font-family: "Lato", sans-serif;
  }

  .sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: transparent;
    overflow-x: hidden;
    padding-top: 20px;
    border-radius: 10px 100px / 120px;
    background-color: #2B2D3B;
  }

  .sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: whitesmoke;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
  }

  .sidenav a:hover, .dropdown-btn:hover {
    color: whitesmoke;
  }

  .main {
    margin-left: 200px;
    font-size: 20px;
    padding: 0px 10px;
  }


  .active ,.dropdown-btn:hover {

    background-color: whitesmoke ;
    color: #2B2D3B;
  }


  .dropdown-container {
    display: none;
    background-color:transparent;
    padding-left: 8px;
  }

  .fa-caret-down {
    
    float: left;
    padding-right: 20px;
  }

  
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  .isDisabled {
  color: currentColor;
  cursor: not-allowed;
  opacity: 0.5;
  text-decoration: none;
}
</style>
</head>
<body>

<div class="sidenav" style="margin-top: 100px; height: 550px;  margin-left: 235px; width: 240px;" >
  <button class="dropdown-btn">BI 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/home_bi" style="font-size: 15px; margin-left: 40px;" >Power BI</a>
    <a href="/bo_home" style="font-size: 15px; margin-left:40px;">SAP Buisiness Objects</a>
    <a href="/an_home" style="font-size: 15px; margin-left:40px;">Analyse & Extraction</a>
  </div>
  
  <button class="dropdown-btn">Automatisation 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/au_home"  class="isDisabled" style="font-size: 15px; margin-left: 40px;" title="Automatisation des Processus Robotis??es" >RPA</a>
    <a href="#" class="isDisabled" style="font-size: 15px; margin-left:40px;" >Dev??loppement  & Design</a>
    
  </div>
 
 
  <button class="dropdown-btn"  >Sharepoint 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    
    <a href="/d_droit" style="font-size: 15px; margin-left: 40px;" id="sh">Demande Droit</a>
    <a href="/dd_droit" style="font-size: 15px; margin-left: 40px;">Cr??er une liste SP</a>
    
  </div>
  
</div>



<script>



var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</body>
</html> 


<div>@yield('list')</div>
        <link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">

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
        #im{
            display:none;
        }
    </style>
</head>
<body><br>
    <div class="container" style=" width: 500px;">
       
 <p class="h2" style="text-align: center;">Demande Droit</p><br>
        <form class="signup" action="{{ url('/l_d_droit')}}" method="post">
       
     
    
        <div class="form-group" >
            <label style="font-size: 20px;">Dossier :<a style="color: red;">*</a></label>
            <textarea  name="dossier" class ="form-control" required placeholder="Dossier"></textarea>
            <span class="Error"></span>
        </div>

            <div class="form-group" >
                <label style="font-size: 20px;">Utilisateurs :<a style="color: red;">*</a></label>
                <textarea rows="5" cols="100" name="Utilisateurs" class ="form-control" required placeholder="Entrer la liste des utilisateurs"></textarea>
                <span class="Error"></span>
            </div>
            
        </div>
            <form>
           

            
            {{ csrf_field() }}
            <div class="container" style=" width: 300px;">
                <input class="btn btn-primary btn-block" type="submit" value="create"/>
            </div>
        </form>
    
  </body>
  
  
</html>

