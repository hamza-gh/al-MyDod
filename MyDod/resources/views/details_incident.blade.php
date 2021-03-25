@extends('layouts.app')
@section('content')
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

            <h1 style=" margin-left: 750px; color: black; font-weight: bold;">Détails</h1>
<div class="container"  style="width: 800px;">
    <div class="col-md-12">
    <div class ="row">
<style>
    label{
        font-weight: bolder;
    }
</style>


<head>
    <meta charset="UTF-8">
    <title>Détail incendit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>

</head>
<body>
    <div >
        <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a><br>
        
      <br>
      <form class="signup" action="/liste_incident/{{$inc->id}}" method="Post"  >
        
        <input type="hidden" name="_method" value=PUT>
            <div class="form-group">
        
                <label >Objet :</label>
                <label class="form-control">{{$inc->objet}}<label>
                <span class="Error"></span>
            </div>
            

            <div class="form-group">
                <label>Description :</label>
               
                <textarea readonly rows="3"  cols="100" name="Description" class ="form-control"  required placeholder="Description">{{$inc->Description}}</textarea>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Criticité :</label>
                <label class="form-control"> {{$inc->criticité}}</label>
                <span class="Error"></span>
            </div>
            <div class="form-group">
            
                <label >Date de Cration :</label>
                <label class="form-control">{{$inc->created_at}}<label>
                <span class="Error"></span>
            </div>
           

           
                   
            @if(Auth::user()->etat=='user')
                    
            
                        @if($inc->etat=='Nouveau')
                            <label style="font-weight: bolder;">Etat :</label>
                                &nbsp;&nbsp;
                            <label style="color: green;text-align: center;font-weight: bolder;font-size: 20px; " >{{$inc->etat}}</label>
                        @endif
                
                        @if($inc->etat=='Clos')
                        <br>
                        <label> Date d'échéance : {{$inc->date_echeance}}</label> 
                        
                        <br>
                                <label style="font-weight: bolder;">Etat :</label>
                                &nbsp;&nbsp;<label style="color: red; text-align: center;font-weight: bolder;font-size: 20px;" >{{$inc->etat}}</label>
                        @endif
                
                        @if($inc->etat=='En cours')
                        <br>
                        <label> Date d'échéance : {{$inc->date_echeance}}</label> 
                        <br>
                                 <label style="font-weight: bolder;">Etat :</label>
                                &nbsp;&nbsp;<label style="color: orange; text-align: center;font-weight: bolder;font-size: 20px ">{{$inc->etat}}</label>
                        @endif


                        
             @endif

        





                    @if(Auth::user()->etat=='admin')
                    @if($inc->etat=='Nouveau')
                    
              
                    <br>
        <label>Affectater à :</label>
        <select name="affectation" id="" style="text-align: center; width: auto; height: 35px; background-color: white; font-weight: bolder;
         border: 2px solid black;">
                    <option>{{$inc->affectation}}</option>
                    <option>moh@gmail.com</option>
                    <option >mohammed.echaib@alten.com</option>
                    <option>mounaim.benmoussa@alten.com</option>
                    <option>iman.zubeiri@alten.com</option>
                    <option>yahia.ouadhdhafe@alten.com</option>
                    <option>afaf.assemar@alten.com</option>
                    
        </select>
          
    <br><br>
    
    <label>Etat :</label>
    <select name="etat" id="" style="text-align: center; width: auto; height: 35px; background-color: white; font-weight: bolder;
     border: 2px solid black; margin-left: 60px;">
                @if($inc->etat=='Nouveau')
            
                <option style="color: green;" >{{$inc->etat}}</option>
                <option style="color: orange;">En cours</option>
                   <option style="color: red" >Clos</option>
                @endif
          
                @if($inc->etat=='Clos')
                       
                       <option style="color: red;" >{{$inc->etat}}</option>
                       <option style="color: green;">Nouveau</option>
                       <option style="color: orange;">En cours</option>
                @endif
          
                @if($inc->etat=='En cours')
               
                      <option style="color: orange;">{{$inc->etat}}</option>
                      <option style="color: green;">Nouveau</option>
                      <option style="color: red" >Clos</option>
                @endif
    </select>
    
    
          </div>
        </div>

      
    

        <br>
        {{ csrf_field() }}
    <div class="form-group" style=" width: 400px;margin-left: 150px;">
        <input class="btn btn-primary btn-block" type="submit" value="Editer" />
    </div>
            @endif

        @if ($inc->etat=='En cours')
        
        <input type="label" name="affectation" id="" value="{{$inc->affectation}}" style="visibility: hidden; width: 0px;height: 0px;">
        <label>Affectater à :</label>
        <select name="" id="" disabled style="text-align: center; width: auto; height: 35px; background-color: white; font-weight: bolder;
         border: 2px solid black;">
                      <option>{{$inc->affectation}}</option>
                     
                   
        </select>
            <br><br>
            <label>Date d'échéance :</label>
            <input type="date" name="date_echeance"  value="{{$inc->date_echeance}}">
    <br><br>
    
    <label>Etat :</label>
    <select name="etat" id="" style="text-align: center; width: auto; height: 35px; background-color: white; font-weight: bolder;
     border: 2px solid black; margin-left: 60px; " >
                @if($inc->etat=='Nouveau')
            
             <option style="color: green;" >{{$inc->etat}}</option>
             <option style="color: orange;">En cours</option>
                <option style="color: red" >Clos</option>
             @endif
       
             @if($inc->etat=='Clos')
                    
                    <option style="color: red;" >{{$inc->etat}}</option>
                    <option style="color: green;">Nouveau</option>
                    <option style="color: orange;">En cours</option>
             @endif
       
             @if($inc->etat=='En cours')
            
                   <option style="color: orange;">{{$inc->etat}}</option>
                   <option style="color: green;">Nouveau</option>
                   <option style="color: red" >Clos</option>
             @endif

               
                
    </select>
          </div>
        </div>

      
    

        <br>
        {{ csrf_field() }}
    <div class="form-group" style=" width: 400px;margin-left: 140px;">
        <input class="btn btn-primary btn-block" type="submit" value="Editer" />
    </div>
             @endif
                    
                @endif

      
</form>
    </div>


    
    </div>
    </div>
    </div>

    
</body>
</html>

@endsection