
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
                <title>editer une anomalie ou mis ajour</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>

<style>
    label{
        font-weight: bolder;
    }
</style>
            </head>
            <body>

            
            <div class="container" style=" width: 600px;" >
            
            
            <p class="h2"style="margin-left: 170px;"> Details Analyse </p>
        <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a>
       
       <form class="signup" action="/liste_analyse/{{$inc->id}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value=PUT>
        <input type="hidden" name="_method" value=PUT>
       <br>
       
       @include('partieflash.flash')
           <div class="form-group">
           
                  
           <label>Projet :</label><br>
                <input class="form-control"  type="text" name="projet"
                disabled required placeholder="Entrer Nom Projet" value="{{$inc->projet}}"/>
                <span class="Error"></span>
            </div>

              
               <label>Typologie :</label>
               <input class="form-control"  type="text" 
               disabled name="typologie" required placeholder="Entrer Typologie" value="{{$inc->typologie}}"/><br><br>
               <span class="Error"></span>

               <div class="form-group">
                <label>Descriptif d'analyse :</label><br>
                <textarea rows="5" cols="100" name="Descriptif"  
                class ="form-control" required placeholder="Entrer Descriptif" disabled>{{$inc->Descriptif}}</textarea>
                <span class="Error"></span>
                <br>
                @if(Auth::user()->etat=='user')
            @if($inc->etat=='Nouveau')
                <label style="font-weight: bolder;">Etat :</label>
                    &nbsp;&nbsp;
           
                        
                        
             <label style="color: green;text-align: center;font-weight: bolder;font-size: 20px; " >{{$inc->etat}}</label>
             @endif
       
             @if($inc->etat=='Clos')
             
                        <label> Date d'??ch??ance : {{$inc->date_echeance}}</label> 
                        
                        <br>
             <label style="font-weight: bolder;">Etat :</label>
                    &nbsp;&nbsp;<label style="color: red; text-align: center;font-weight: bolder;font-size: 20px;" >{{$inc->etat}}</label>
             @endif
       
             @if($inc->etat=='En cours')
            
                        <label> Date d'??ch??ance : {{$inc->date_echeance}}</label> 
                        
                        <br>
             <label style="font-weight: bolder;">Etat :</label>
                    &nbsp;&nbsp;<label style="color: orange; text-align: center;font-weight: bolder;font-size: 20px ">{{$inc->etat}}</label>
             @endif
             @endif

                    @if(Auth::user()->etat=='admin')
                    @if($inc->etat=='Nouveau')
                    
              
                    <br>
        <label>Affectater ?? :</label>
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
       
        <label>Affectater ?? :</label>
        <select name="" id="" disabled style="text-align: center; width: auto; height: 35px; background-color: white; font-weight: bolder;
         border: 2px solid black;">
                      <option>{{$inc->affectation}}</option>
                     
                   
        </select>
            <br><br>
            <label>Date d'??ch??ance :</label>
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

         
         


       
 </div>
</div>


           
         
            </div>

            </body>
            </html>