
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets\css\theme.css')}}">
    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <style>
    label{
        font-weight: bolder;
    }
</style>
</head>
<body>

    <div class="container" style=" width: 600px;margin-left: 500px;">
        
   

        <p class="h2"style="margin-left: 150px;">Details d'un Process RPA </p>
        <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a><br><br>
        <form class="signup" action="/liste_process_rpa/{{$i->id}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value=PUT>
            <div class="form-group">
            
                <div class="form-group">
                    <label>Objectif de votre Besoin :</label>
                    <textarea rows="2" cols="600" disabled  name="Objectif"  class ="form-control" 
                    required placeholder="Entrer Objectif de votre Besoin " >{{$i->Objectif}}</textarea>
                    <span class="Error"></span>
                </div>
                <div class="form-group">
                    <label>Processus Utilisé Actuellement :</label>
                    <textarea rows="2" cols="100" disabled name="Processus"   class ="form-control"
                     required placeholder="Enntrer Processus Utilisé Actuellement " >{{$i->Processus}}</textarea>
                    <span class="Error"></span>
                </div>
                
                <label>Le Processus Actuel occupe combien d'ETP ?  :</label>
                <input id="balloons" type="number" disabled name="Processus_etp"  min="1" required style="width: 80px;" value="{{$i->Processus_etp}}">
                
                <span class="Error"></span>
                <br><br>

                <label>Fonctionnalités de l'automatisation  :</label>
                <input class="form-control"  type="text" disabled name="Fonctionnalites" 
                required placeholder="Entrer Fonctionnalités de l'automatisation " value="{{$i->Fonctionnalites}}"/>
                <span class="Error"></span>

                <label>Planification :</label>
                <input class="form-control" disabled type="text" name="Planification" required placeholder="Planification" value="{{$i->Planification}}"/>
                <span class="Error"></span> 
                 
                <label>Canal  d'envoi :</label>
                <input class="form-control" disabled type="text" name="Canal" required placeholder="Entrer Canal  d'envoi"
                 value="{{$i->Canal}}"/>
                <span class="Error"></span>

                <label>Utilisateurs :</label>
                <input class="form-control" disabled type="text" name="Utilisateurs" required placeholder="Entrer les Utilisateurs"
                 value="{{$i->Utilisateurs}}"/>
               <br>
               
               @if(Auth::user()->etat=='user')
            @if($i->etat=='Nouveau')
                <label style="font-weight: bolder;">Etat :</label>
                    &nbsp;&nbsp;
           
                        
                        
             <label style="color: green;text-align: center;font-weight: bolder;font-size: 20px; " >{{$i->etat}}</label>
             @endif
       
             @if($i->etat=='Clos')
             <label style="font-weight: bolder;">Etat :</label>
                    &nbsp;&nbsp;<label style="color: red; text-align: center;font-weight: bolder;font-size: 20px;" >{{$i->etat}}</label>
             @endif
       
             @if($i->etat=='En cours')
             <label style="font-weight: bolder;">Etat :</label>
                    &nbsp;&nbsp;<label style="color: orange; text-align: center;font-weight: bolder;font-size: 20px ">{{$i->etat}}</label>
             @endif
             @endif

                    @if(Auth::user()->etat=='admin')
                    @if($i->etat=='Nouveau')
                    
              
                    <br>
        <label>Affectater à :</label>
        <select name="affectation" id="" style="text-align: center; width: auto; height: 35px; background-color: white; font-weight: bolder;
         border: 2px solid black;">
                    <option>{{$i->affectation}}</option>
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
                @if($i->etat=='Nouveau')
            
                <option style="color: green;" >{{$i->etat}}</option>
                <option style="color: orange;">En cours</option>
                   <option style="color: red" >Clos</option>
                @endif
          
                @if($i->etat=='Clos')
                       
                       <option style="color: red;" >{{$i->etat}}</option>
                       <option style="color: green;">Nouveau</option>
                       <option style="color: orange;">En cours</option>
                @endif
          
                @if($i->etat=='En cours')
               
                      <option style="color: orange;">{{$i->etat}}</option>
                      <option style="color: green;">Nouveau</option>
                      <option style="color: red" >Clos</option>
                @endif
    </select>
    
    
          </div>
        </div>

      
    

        <br>
        {{ csrf_field() }}
    <div class="form-group" style=" width: 400px;margin-left: 550px;">
        <input class="btn btn-primary btn-block" type="submit" value="Editer" />
    </div>
            @endif

        @if ($i->etat=='En cours')
        
        <input type="label" name="affectation" id="" value="{{$i->affectation}}" style="visibility: hidden; width: 0px;height: 0px;">
        <label>Affectater à :</label>
        <select name="" id="" disabled style="text-align: center; width: auto; height: 35px; background-color: white; font-weight: bolder;
         border: 2px solid black;">
                      <option>{{$i->affectation}}</option>
                     
                   
        </select>
            <br><br>
            <label>Date d'échéance :</label>
            <input type="date" name="date_echeance"  value="{{$i->date_echeance}}">
    <br><br>
    
    <label>Etat :</label>
    <select name="etat" id="" style="text-align: center; width: auto; height: 35px; background-color: white; font-weight: bolder;
     border: 2px solid black; margin-left: 60px; " >
                @if($i->etat=='Nouveau')
            
             <option style="color: green;" >{{$i->etat}}</option>
             <option style="color: orange;">En cours</option>
                <option style="color: red" >Clos</option>
             @endif
       
             @if($i->etat=='Clos')
                    
                    <option style="color: red;" >{{$i->etat}}</option>
                    <option style="color: green;">Nouveau</option>
                    <option style="color: orange;">En cours</option>
             @endif
       
             @if($i->etat=='En cours')
            
                   <option style="color: orange;">{{$i->etat}}</option>
                   <option style="color: green;">Nouveau</option>
                   <option style="color: red" >Clos</option>
             @endif

               
                
    </select>
          </div>
        </div>

      
    

        <br>
        {{ csrf_field() }}
    <div class="form-group" style=" width: 400px;margin-left: 550px;">
        <input class="btn btn-primary btn-block" type="submit" value="Editer" />
    </div>
             @endif
                    
                @endif

      
</form>

        
               

            

                
              
  </div>
</div>


          
    </div>
  </body>
</html>

@endsection