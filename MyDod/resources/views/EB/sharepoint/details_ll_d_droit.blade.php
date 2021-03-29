
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
                <title>Details {{$inc->titre}}</title>
  
    <style>
        label{
            font-weight: bolder;
        }
    </style>

            </head>
            <body>
                

      
            
            <div class="container" style=" width: 600px;" >
                      <h1 style="text-align: center; color: black; font-weight: bolder;"> Details  </h1>
        
                    <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a>
                 
                   <form class="signup" action="/ll_d_droit/{{$inc->id}}" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="_method" value=PUT><br>
                    <div class="form-group" style="width: 700px;">
                    <label>Nom de la liste :

                    <h style="font-size: 13px; font-weight: bolder; margin-left: 285px;">Date de Creation : {{$inc->created_at->day}}/{{$inc->created_at->month}}/{{$inc->created_at->year}}</h></label>
            <input class="form-control"  type="text" name="nom_l" disabled required placeholder="Entrer votre Nom de la liste"
             value="{{$inc->nom_l}}" 
             style="text-align: left;"/>
            <span class="Error"></span>
        </div>
                
                
                <div class="form-group" style=" width: 600px;">
                    <label style="font-weight: bolder;">Utilisateurs :</label>
                    <textarea style="height: 300px; width: 100%;"  name="utilisateur"   class ="form-control" required placeholder="Entrer Utilisateur(s) :" disabled>{{$inc->utilisateur}}</textarea>
                    <span class="Error"></span>
                   
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
    <div class="container" style=" width: 400px;">
        <input class="btn btn-primary btn-block" type="submit" value="Editer" />
    </div>
            @endif

        @if ($inc->etat=='En cours')
        <br>
        
        <label>Affectater à :</label>
        <select name="" id="" disabled style="text-align: center; width: auto; height: 35px; background-color: white; font-weight: bolder;
         border: 2px solid black;">
                      <option>{{$inc->affectation}}</option>
                     
                   
        </select>
            <br><br>
            <label>Date d'échéance :</label>
            <input type="date" name="date_echeance"  value="{{$inc->date_echeance}}">
            <input type="label" name="affectation" id="" value="{{$inc->affectation}}" style="visibility: hidden; width: 0px;height: 0px;">
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
             @if($inc->etat=='Clos')
    
    <label style="font-weight: bolder; ">Etat :</label>
    &nbsp;&nbsp;<label style="color: red; text-align: center;font-weight: bolder;font-size: 25px;" >{{$inc->etat}}</label>

@endif
                @endif

      
</form>
                  </div>
                  
                </div>
               
                    
                
      

          
            </div>

            </body>
            </html>