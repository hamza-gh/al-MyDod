
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
                <title>Details Rapport</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>


            </head>
            <body>

            <form class="signup" action="/liste_bi_rapports/{{$inc->id}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value=PUT>
            <div class="form-group" style=" width: 600px;margin-left: 500px;" >
                <div>
                    <h1 style="text-align: center; color: black; font-weight: bolder;"> Details d'un rapport </h1>
                    <a href="javascript:history.go(-1)" class="btn btn-success" style="background-color: black;" > <  </a>
                   </div>
            
                  
                    <br><label style="font-weight: bolder;" >Objet:
                    <h style="font-size: 13px; font-weight: bolder; margin-left: 360px;">Date de Creation : {{$inc->created_at->day}}/{{$inc->created_at->month}}/{{$inc->created_at->year}}</h></label>
                    <textarea rows="2" cols="100" name="nom_rapport"   class ="form-control" 
                    required placeholder="Entrer Nom Rapport:" disabled>{{$inc->objet}}</textarea>
                    <span class="Error"></span>
                </div>
                
                <div class="form-group" style=" width: 600px;margin-left: 500px;">
                    <label style="font-weight: bolder;">Nom Rapport:
                    <textarea rows="3" cols="100" name="description"   class ="form-control" 
                    required placeholder="Entrer Description:" disabled>{{$inc->nom_rapport}} </textarea>
                    <span class="Error"></span>
<br>
                    
            <div class="form-group">
            
                <label>Technologie :</label>
                <input class="form-control"  type="text" name="objet" required placeholder="Entrer votre Objet" value="{{$inc->technologie}}" disabled/>
                <span class="Error"></span>
            </div>

        
            <div class="form-group">
            
                <label>Catégorie :</label>
                <input class="form-control"  type="text" name="objet" required placeholder="Entrer votre Objet" value="{{$inc->categorie}}" disabled/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
            
                <label>Cycle de vie :</label>
                <input class="form-control"  type="text" name="objet" required placeholder="Entrer votre Objet" value="{{$inc->cycle_de_vie}}" disabled/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
            
                <label>Les utilisateurs :</label>
                <input class="form-control"  type="text" name="objet" required placeholder="Entrer votre Objet" value="{{$inc->utilisateurs}}" disabled/>
                <span class="Error"></span>
            </div>
            
            <div class="form-group" style>
            
                <label>Planification :</label>
                <input class="form-control"  type="text" name="objet" required placeholder="Entrer votre Objet" value="{{$inc->planification}}" disabled/>
                <span class="Error"></span>
            </div>
            
          
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

            </body>
            </html>