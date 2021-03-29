
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
                <title>Details Rapport BO</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>

    <style>
    label{
        font-weight: bolder;
    }
</style>
            </head>
            <body>
<div>
          
             

            <div class="container" style=" width: 600px;" >
               
                    <h1 style="text-align: center; color: black; font-weight: bolder;"> Details d'un rapport BO</h1>
                    <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a>
                   
                   <form class="signup" action="/liste_bo_rap/{{$inc->id}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value=PUT><br>
                  <div class="form-group" style="width: 600px;">
                    <label style="font-weight: bolder;" >Objectif du besoin:
                    <h style="font-size: 12px; font-weight: bolder; margin-left: 280px;">Date de Creation : {{$inc->created_at->day}}/{{$inc->created_at->month}}/{{$inc->created_at->year}}</h></label>
                    <textarea rows="2" cols="100" name="object"   class ="form-control" 
                    required placeholder="Entrer Nom Rapport:"disabled >{{$inc->object}}</textarea>
                    <span class="Error"></span>
                </div>
                
                <div class="form-group" >
                    <label style="font-weight: bolder;">Noms des Rapports Proposés :
                    <textarea rows="3"  name="n_rapport"   class ="form-control" style=" width: 600px;"
                    required disabled >{{$inc->n_rapport}} </textarea>
                    <span class="Error"></span>
<br>
                    
            <div class="form-group" style=" width: 600px;">
            
                <label>Univers  :</label><br>
                <textarea class="form-control"  type="text" name="univers"
                 required placeholder="Entrer votre Objet" disabled>{{$inc->univers}}</textarea>
                <span class="Error"></span>
            </div>

        
            <div class="form-group" style=" width: 600px;">
            
                <label>Champs à extraires :</label><br>
                <textarea class="form-control"  type="text" name="c_extraires" required placeholder="Entrer votre Objet" 
                disabled>{{$inc->c_extraires}}</textarea>
                <span class="Error"></span>
            </div>
            <div class="form-group" style=" width: 600px;">
            
                <label>Filtres à appliquer :</label>
                <textarea class="form-control" disabled type="text" name="filtres" required placeholder="Entrer votre Objet" >{{$inc->filtres}}</textarea>
                <span class="Error"></span>
            </div>
            <div class="form-group" style=" width: 600px;">
            
                <label>Liste de diffusion :</label>
                <textarea class="form-control" disabled type="text" name="liste_d" required placeholder="Entrer votre Objet" >{{$inc->liste_d}}</textarea>
                <span class="Error"></span>
            </div>
            
            <div class="form-group" style=" width: 600px;">
            
                <label>Planification :</label>
                <textarea class="form-control" disabled type="text" name="planification" required placeholder="Entrer votre Objet" >{{$inc->planification}}</textarea>
                <span class="Error"></span>
            </div>
         
             
       
             
               
               
                @if(Auth::user()->etat=='user')
            @if($inc->etat=='Nouveau')
                <label style="font-weight: bolder;">Etat :</label>
                    &nbsp;&nbsp;
           
                        
                        
             <label style="color: green;text-align: center;font-weight: bolder;font-size: 20px; " >{{$inc->etat}}</label>
             @endif
       
             @if($inc->etat=='Clos')
             
                        <label> Date d'échéance : {{$inc->date_echeance}}</label> 
                        
                        <br>
             <label style="font-weight: bolder;">Etat :</label>
                    &nbsp;&nbsp;<label style="color: red; text-align: center;font-weight: bolder;font-size: 20px;" >{{$inc->etat}}</label>
             @endif
       
             @if($inc->etat=='En cours')
             
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
    <div class="container" style=" width: 400px;">
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
    <div class="container" style=" width: 400px;">
        <input class="btn btn-primary btn-block" type="submit" value="Editer" />
    </div>
             @endif
                    
                @endif

      
</form>
            </div>
            
       
             
            <br>

        
  </body>
            </html>