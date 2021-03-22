
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

            <div class="form-group" style=" width: 600px;margin-left: 500px;" >
            <div>
            <p class="h2"style="margin-left: 110px;">Details d'une Extraction </p>
        <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a>
       </div>
  
       <form class="signup" action="/liste_extraction/{{$inc->id}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value=PUT>
       <br>
       
       
           <div class="form-group">
           
                  
           <label>Type de données :</label><br>
                <input class="form-control" disabled type="text" name="Type_d" required placeholder="Entrer Nom Projet" value="{{$inc->Type_d}}"/>
                <span class="Error"></span>
            </div>

              
               <label>Source de données:</label>
               <input class="form-control" disabled type="text" name="Source_d" required placeholder="Entrer Typologie" value="{{$inc->Source_d}}"/><br><br>
               <span class="Error"></span>

               <div class="form-group">
                <label>Descriptif :</label><br>
                <textarea rows="5" cols="100" name="Descriptif"  
                class ="form-control" disabled required placeholder="Entrer Descriptif" >{{$inc->Descriptif}}</textarea>
                <span class="Error"></span>
                <br>
                @if($inc->etat=='Nouveau' && Auth::user()->etat=='user')
            <label style="font-weight: bolder;">Etat :</label>
                    &nbsp;&nbsp;
           
                        
                        
             <label style="color: green;text-align: center;font-weight: bolder;font-size: 20px; " >{{$inc->etat}}</label>
             @endif
       
             @if($inc->etat=='Clos')
             <label style="font-weight: bolder;">Etat :</label>
                    &nbsp;&nbsp;<label style="color: red; text-align: center;font-weight: bolder;font-size: 20px;" >{{$inc->etat}}</label>
             @endif
       
             @if($inc->etat=='En cours')
             <label style="font-weight: bolder;">Etat :</label>
                    &nbsp;&nbsp;<label style="color: orange; text-align: center;font-weight: bolder;font-size: 20px ">{{$inc->etat}}</label>
             @endif
<br>
                    @if(Auth::user()->etat=='admin')
                    @if($inc->etat=='Nouveau')

<label>Affectater à :</label>
        <select name="affectation" id="" style="text-align: center; width: auto; height: 35px; background-color: white; font-weight: bolder;
         border: 2px solid black;">
                    <option>{{$inc->affectation}}</option>
                    <option >hamza@gmail.com</option>
                    <option >ayoub@gmail.com</option>
        </select>
            
    <br><br>
    
    <label>Etat :</label>
    <select name="etat" id="" style="text-align: center; width: auto; height: 35px; background-color: white; font-weight: bolder;
     border: 2px solid black; margin-left: 60px;">
                <option>{{$inc->etat}}</option>
                
                <option style="color: orange;">En cours</option>
                <option style="color: red" >Clos</option>
    </select>
          </div>
        </div>

      
    

        <br>
        {{ csrf_field() }}
    <div class="form-group" style=" width: 400px;margin-left: 550px;">
        <input class="btn btn-primary btn-block" type="submit" value="Editer" />
    </div>
            @endif

        @if ($inc->etat=='En cours')
        
        <label>Affectater à :</label>
        <select name="affectation" id="" disabled style="text-align: center; width: auto; height: 35px; background-color: white; font-weight: bolder;
         border: 2px solid black;">
                    <option>{{$inc->affectation}}</option>
                   
        </select>
            
    <br><br>
    
    <label>Etat :</label>
    <select name="etat" id="" style="text-align: center; width: auto; height: 35px; background-color: white; font-weight: bolder;
     border: 2px solid black; margin-left: 60px;color:red; color:red;" >
                
            
                <option style="color: red" >Clos</option>
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

         
         


       
 </div>
</div>


        
            </div>

            </body>
            </html>