@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets\css\login.css')}}">
<link rel="stylesheet" href="{{asset('assets\css\fontawesome.min.css')}}">
    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\fontawesome.min.js')}}"></script>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$cpt=1}}</title>
   <style>
       ::-webkit-scrollbar {
                     background: whitesmoke;
                     width: 10px;
                    }
        ::-webkit-scrollbar-thumb {
                                background: #5a5a5a;
                                border-radius: 30px;
                                }
        ::-webkit-scrollbar-thumb:hover {
                                        background: #1b1a1a;
                                        }
        ::-webkit-scrollbar-track {
                                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
                                background-color: rgb(255, 255, 255);
                                }
        table {
            margin-right: 20px;

        }
        td{
            font-weight:bolder;
          
        }

       
   </style>

</head>

<div>
    <select class="float-right"  id="status" style="margin-right: 200px;
     width: auto; height:  25px; 
     margin-bottom: 10px;
     display: flex;flex-direction: column;"
      onchange="changestatus()">
        
        <option value="nv" >Nouveau</option>
        <option value="ec">En cours</option>
        <option value="cl" >Clos</option>
  </select>
</div>

<body style="overflow-y: hidden;">
    <div id="t11">
                <div   style=" display: inline-flex; overflow-x: scroll; height: 370px;width: 100%;"  >

                    <div >
                    <table class="table table-striped " style=" text-align: center;"   >
                        <thead>
                            
                       
                        
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: blue;" >BI</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                    
                        <tr >

                            
                        @foreach($liste_bi_rapports as $i)
                        <td>Rapport BI</td>
                        
                        <td>{{$i->name}}</td>
                        

                        <td style="color: green;font-weight: bolder; ">{{$i->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="liste_bi_rapports/{{$i->id}}/details_bi_rapports">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>
           

                <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center; overflow-y:scroll;">
                        <thead>
                        
                        
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: blue;"  >BI</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($bi_anomalie_majs as $bi_anomalie_majs)
                        
                        <td>{{$bi_anomalie_majs->titre}}</td>
                        
                        <td>{{$bi_anomalie_majs->name}}</td>
                        

                        <td style="color: green; font-weight: bolder;">{{$bi_anomalie_majs->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_ano_maj/{{$bi_anomalie_majs->id}}/details_ano_maj">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>

            
                    <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                                                
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: red;"  >BO</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_bo_rap as $liste_bo_rap)
                        
                        <td>Rapport BO</td>
                        
                        <td>{{$liste_bo_rap->name}}</td>
                        

                        <td style="color: green;font-weight: bolder; ">{{$liste_bo_rap->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_bo_rap/{{$liste_bo_rap->id}}/details_bo_rap">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>
            
                    <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                       
                        
                            <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: red; "  >BO</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_bo_r as $liste_bo_r)
                        
                        <td>{{$liste_bo_r->titre}}</td>
                        
                        <td>{{$liste_bo_r->name}}</td>
                        

                        <td style="color: green;font-weight: bolder; ">{{$liste_bo_r->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_bo_r/{{$liste_bo_r->id}}/details_bo_r">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>
                    <div style="margin-left: 15px;">
            
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                      
                        
                            <th scope="col" style="text-align: center; font-size: 20px;  font-weight: bold; color: slateblue;"  >AE</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_analyse as $liste_analyse)
                        
                        <td>Analyse</td>
                        
                        <td>{{$liste_analyse->name}}</td>
                        

                        <td style="color: green; font-weight: bolder;">{{$liste_analyse->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_analyse/{{$liste_analyse->id}}/details_analyse">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>

                    </table>
                </div>

                <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                        
                        
                            <th scope="col" style="text-align: center; font-size: 20px;  font-weight: bold; color: slateblue; "  >AE</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_extraction as $liste_extraction)
                        
                        <td>Extraction</td>
                        
                        <td>{{$liste_extraction->name}}</td>
                        

                        <td style="color: green; font-weight: bolder;">{{$liste_extraction->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_extraction/{{$liste_extraction->id}}/details_extraction">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>

                     </table>
                    </div>
            
         </div>
         
         <div  style=" display: inline-flex ; overflow-x: scroll; height: 305px; width: 100%; " >
           
            
                
                <div >
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                        
                        
                            <th scope="col" style="text-align: center; font-size: 20px;  font-weight: bold; color: rgba(238, 182, 0, 0.639); "  >RPA</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_process_rpa as $liste_process_rpa)
                        
                        <td>Process RPA</td>
                        
                        <td>{{$liste_process_rpa->name}}</td>
                        

                        <td style="color: green; font-weight: bolder;">{{$liste_process_rpa->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_process_rpa/{{$liste_process_rpa->id}}/details_process_rpa">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>

                     </table>

                  
                  </div>
            <div>
                <table class="table table-striped" style="text-align: center; width: 400px; margin-left: 15px;">
                    <thead>
                   
                    
                        <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: rgba(238, 182, 0, 0.639); "  >RPA</th>
                    <th scope="col" style="text-align: center;" >Nom</th>
                    <th scope="col" style="text-align: center;">Etat</th>
                    <th></th>
                

                </thead>
                <tbody>
                    <tr>

                        
                    @foreach($liste_au_ano_maj as $liste_au_ano_maj)
                    
                    <td>{{$liste_au_ano_maj->titre}}</td>
                    
                    <td>{{$liste_au_ano_maj->name}}</td>
                    

                    <td style="color: green;font-weight: bolder; ">{{$liste_au_ano_maj->etat}}</td>

                    <td>
                        <a class="btn btn-primary" href="/liste_au_ano_maj/{{$liste_au_ano_maj->id}}/details_au_ano_maj">...</a>
                    </td>
                    
                    </tr>
                    @endforeach
                </tbody>
        
                </table>
            


             </div>
             <div>
                <table class="table table-striped" style="text-align: center; margin-left: 10px;">
                    <thead>
                   
                    
                        <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: rgb(84, 228, 0); "  >SharePoint</th>
                    <th scope="col" style="text-align: center;" >Nom</th>
                    <th scope="col" style="text-align: center;">Etat</th>
                    <th></th>
                

                </thead>
                <tbody>
                    <tr>

                        
                    @foreach($l_d_droit as $l_d_droit)
                    
                    
                    <td>Demande de Droit</td>
                    <td>{{$l_d_droit->name}}</td>
                    

                    <td style="color: green; font-weight: bolder;">{{$l_d_droit->etat}}</td>

                    <td>
                        <a class="btn btn-primary" href="/l_d_droit/{{$l_d_droit->id}}/details_l_d_droit">...</a>
                    </td>
                    
                    </tr>
                    @endforeach
                </tbody>
        
                </table>
            


             </div>
             <div>
                <table class="table table-striped" style="text-align: center; margin-left: 60px;">
                    <thead>
                   
                    
                        <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: rgb(84, 228, 0); "  >SharePoint</th>
                    <th scope="col" style="text-align: center;" >Nom</th>
                    <th scope="col" style="text-align: center;">Etat</th>
                    <th></th>
                

                </thead>
                <tbody>
                    <tr>

                        
                    @foreach($ll_d_droit as $ll_d_droit)
                    
                    
                    <td>Lists des droits</td>
                    <td>{{$ll_d_droit->name}}</td>
                    

                    <td style="color: green; font-weight: bolder;">{{$ll_d_droit->etat}}</td>

                    <td>
                        <a class="btn btn-primary" href="/ll_d_droit/{{$ll_d_droit->id}}/details_ll_d_droit">...</a>
                    </td>
                    
                    </tr>
                    @endforeach
                </tbody>
        
                </table>
            


             </div>
        
        
        
        
        </div>
</div>


        <!--partie en cours des EB-->
        
        <div id="t21" style=" visibility: hidden; margin-top: -675px;" >
        <div   style=" display: inline-flex; overflow-x: scroll; height: 360px;width: 100%;"  >

            <div >
            <table class="table table-striped " style=" text-align: center; width: 390px;"   >
                <thead>
                    
               
                
                    <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: blue;" >BI</th>
                <th scope="col" style="text-align: center;" >Nom</th>
                <th scope="col" style="text-align: center;">Etat</th>
                <th></th>
            

            </thead>
            <tbody>
            
                <tr >

                    
                @foreach($liste_bi_rapports_e as $liste_bi_rapports_e)
                <td>Rapport BI</td>
                
                <td>{{$liste_bi_rapports_e->name}}</td>
                

                <td style="color: rgba(238, 182, 0, 0.639); font-weight: bolder;">{{$liste_bi_rapports_e->etat}}</td>

                <td>
                    <a class="btn btn-primary" href="liste_bi_rapports/{{$liste_bi_rapports_e->id}}/details_bi_rapports">...</a>
                </td>
                
                </tr>
                @endforeach
            </tbody>
    
            </table>
        </div>
   

        <div style="margin-left: 15px;">
            <table class="table table-striped" style="text-align: center; overflow-y:scroll;width: 390px;">
                <thead>
                
                
                    <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: blue; "  >BI</th>
                <th scope="col" style="text-align: center;" >Nom</th>
                <th scope="col" style="text-align: center;">Etat</th>
                <th></th>
            

            </thead>
            <tbody>
                <tr>

                    
                @foreach($bi_anomalie_majs_e as $bi_anomalie_majs_e)
                
                <td>{{$bi_anomalie_majs_e->titre}}</td>
                
                <td>{{$bi_anomalie_majs_e->name}}</td>
                

                <td style="color: rgba(238, 182, 0, 0.639);font-weight: bolder; ">{{$bi_anomalie_majs_e->etat}}</td>

                <td>
                    <a class="btn btn-primary" href="/liste_ano_maj/{{$bi_anomalie_majs_e->id}}/details_ano_maj">...</a>
                </td>
                
                </tr>
                @endforeach
            </tbody>
    
            </table>
        </div>

    
            <div style="margin-left: 15px;">
            <table class="table table-striped" style="text-align: center;width: 400px;">
                <thead>
                                        
                    <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: red;"  >BO</th>
                <th scope="col" style="text-align: center;" >Nom</th>
                <th scope="col" style="text-align: center;">Etat</th>
                <th></th>
            

            </thead>
            <tbody>
                <tr>

                    
                @foreach($liste_bo_rap_e as $liste_bo_rap_e)
                
                <td>Rapport BO</td>
                
                <td>{{$liste_bo_rap_e->name}}</td>
                

                <td style="color: rgba(238, 182, 0, 0.639);font-weight: bolder; ">{{$liste_bo_rap_e->etat}}</td>

                <td>
                    <a class="btn btn-primary" href="/liste_bo_rap/{{$liste_bo_rap_e->id}}/details_bo_rap">...</a>
                </td>
                
                </tr>
                @endforeach
            </tbody>
    
            </table>
        </div>
    
            <div style="margin-left: 15px;">
            <table class="table table-striped" style="text-align: center;width: 400px;">
                <thead>
               
                
                    <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: red; "  >BO</th>
                <th scope="col" style="text-align: center;" >Nom</th>
                <th scope="col" style="text-align: center;">Etat</th>
                <th></th>
            

            </thead>
            <tbody>
                <tr>

                    
                @foreach($liste_bo_r_e as $liste_bo_r_e)
                
                <td>{{$liste_bo_r_e->titre}}</td>
                
                <td>{{$liste_bo_r_e->name}}</td>
                

                <td style="color: rgba(238, 182, 0, 0.639);font-weight: bolder; ">{{$liste_bo_r_e->etat}}</td>

                <td>
                    <a class="btn btn-primary" href="/liste_bo_r/{{$liste_bo_r_e->id}}/details_bo_r">...</a>
                </td>
                
                </tr>
                @endforeach
            </tbody>
    
            </table>
        </div>
            <div style="margin-left: 15px;">
    
            <table class="table table-striped" style="text-align: center;width: 390px;">
                <thead>
              
                
                    <th scope="col" style="text-align: center; font-size: 20px;  font-weight: bold; color: slateblue;"  >AE</th>
                <th scope="col" style="text-align: center;" >Nom</th>
                <th scope="col" style="text-align: center;">Etat</th>
                <th></th>
            

            </thead>
            <tbody>
                <tr>

                    
                @foreach($liste_analyse_e as $liste_analyse_e)
                
                <td>Analyse</td>
                
                <td>{{$liste_analyse_e->name}}</td>
                

                <td style="color: rgba(238, 182, 0, 0.639);font-weight: bolder; ">{{$liste_analyse_e->etat}}</td>

                <td>
                    <a class="btn btn-primary" href="/liste_analyse/{{$liste_analyse_e->id}}/details_analyse">...</a>
                </td>
                
                </tr>
                @endforeach
            </tbody>

            </table>
        </div>

        <div style="margin-left: 15px;">
            <table class="table table-striped" style="text-align: center;width: 390px;">
                <thead>
                
                
                    <th scope="col" style="text-align: center; font-size: 20px;  font-weight: bold; color: slateblue; "  >AE</th>
                <th scope="col" style="text-align: center;" >Nom</th>
                <th scope="col" style="text-align: center;">Etat</th>
                <th></th>
            

            </thead>
            <tbody>
                <tr>

                    
                @foreach($liste_extraction_e as $liste_extraction_e)
                
                <td>Extraction</td>
                
                <td>{{$liste_extraction_e->name}}</td>
                

                <td style="color: rgba(238, 182, 0, 0.639);font-weight: bolder; ">{{$liste_extraction_e->etat}}</td>

                <td>
                    <a class="btn btn-primary" href="/liste_extraction/{{$liste_extraction_e->id}}/details_extraction">...</a>
                </td>
                
                </tr>
                @endforeach
            </tbody>

             </table>
            </div>
    
        </div>
     


         <div style=" display: inline-flex ; overflow-x: scroll; height: 370px; width: 100%; " >
   
    
        
        <div >
            <table class="table table-striped" style="text-align: center;">
                <thead>
                
                
                    <th scope="col" style="text-align: center; font-size: 20px;  font-weight: bold; color: rgba(238, 182, 0, 0.639); "  >RPA</th>
                <th scope="col" style="text-align: center;" >Nom</th>
                <th scope="col" style="text-align: center;">Etat</th>
                <th></th>
            

            </thead>
            <tbody>
                <tr>

                    
                @foreach($liste_process_rpa_e as $liste_process_rpa_e)
                
                <td>Process RPA</td>
                
                <td>{{$liste_process_rpa_e->name}}</td>
                

                <td style="color: rgba(238, 182, 0, 0.639); font-weight: bolder;">{{$liste_process_rpa_e->etat}}</td>

                <td>
                    <a class="btn btn-primary" href="/liste_process_rpa/{{$liste_process_rpa_e->id}}/details_process_rpa">...</a>
                </td>
                
                </tr>
                @endforeach
            </tbody>

             </table>

          
          </div>
    <div>
        <table class="table table-striped" style="text-align: center; width: 400px; margin-left: 15px;">
            <thead>
           
            
                <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: rgba(238, 182, 0, 0.639); "  >RPA</th>
            <th scope="col" style="text-align: center;" >Nom</th>
            <th scope="col" style="text-align: center;">Etat</th>
            <th></th>
        

        </thead>
        <tbody>
            <tr>

                
            @foreach($liste_au_ano_maj_e as $liste_au_ano_maj_e)
            
            <td>{{$liste_au_ano_maj_e->titre}}</td>
            
            <td>{{$liste_au_ano_maj_e->name}}</td>
            

            <td style="color: rgba(238, 182, 0, 0.639); font-weight: bolder;">{{$liste_au_ano_maj_e->etat}}</td>

            <td>
                <a class="btn btn-primary" href="/liste_au_ano_maj/{{$liste_au_ano_maj_e->id}}/details_au_ano_maj">...</a>
            </td>
            
            </tr>
            @endforeach
        </tbody>

        </table>
    


     </div>
     <div>
        <table class="table table-striped" style="text-align: center; margin-left: 10px;">
            <thead>
           
            
                <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: rgb(84, 228, 0); width: 350px; "  >SharePoint</th>
            <th scope="col" style="text-align: center;" >Nom</th>
            <th scope="col" style="text-align: center;">Etat</th>
            <th></th>
        

        </thead>
        <tbody>
            <tr>

                
            @foreach($l_d_droit_e as $l_d_droit_e)
            
            
            <td>Demande de Droit</td>
            <td>{{$l_d_droit_e->name}}</td>
            

            <td style="color: rgba(238, 182, 0, 0.639);font-weight: bolder; ">{{$l_d_droit_e->etat}}</td>

            <td>
                <a class="btn btn-primary" href="/l_d_droit/{{$l_d_droit_e->id}}/details_l_d_droit">...</a>
            </td>
            
            </tr>
            @endforeach
        </tbody>

        </table>
    


     </div>
     <div>
        <table class="table table-striped" style="text-align: center; margin-left: 60px;">
            <thead>
           
            
                <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: rgb(84, 228, 0); "  >SharePoint</th>
            <th scope="col" style="text-align: center;" >Nom</th>
            <th scope="col" style="text-align: center;">Etat</th>
            <th></th>
        

        </thead>
        <tbody>
            <tr>

                
            @foreach($ll_d_droit_e as $ll_d_droit_e)
            
            
            <td>Lists des droits</td>
            <td>{{$ll_d_droit_e->name}}</td>
            

            <td style="color: rgba(238, 182, 0, 0.639);font-weight: bolder; ">{{$ll_d_droit_e->etat}}</td>

            <td>
                <a class="btn btn-primary" href="/ll_d_droit/{{$ll_d_droit_e->id}}/details_ll_d_droit">...</a>
            </td>
            
            </tr>
            @endforeach
        </tbody>

        </table>
    


     </div>




    </div>
</div>

            <!-- Partie Clos-->


               <div id="t31" style="visibility: hidden;  margin-top: -775px;">
                <div   style=" display: inline-flex; overflow-x: scroll; height: 370px;width: 100%;"  >

                    <div >
                    <table class="table table-striped " style=" text-align: center;"   >
                        <thead>
                            
                       
                        
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: blue;" >BI</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                    
                        <tr >

                            
                        @foreach($liste_bi_rapports_c as $liste_bi_rapports_c)
                        <td>Rapport BI</td>
                        
                        <td>{{$liste_bi_rapports_c->name}}</td>
                        

                        <td style="color: red; font-weight: bolder;">{{$liste_bi_rapports_c->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="liste_bi_rapports/{{$liste_bi_rapports_c->id}}/details_bi_rapports">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>
           

                <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center; overflow-y:scroll;">
                        <thead>
                        
                        
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: blue;"  >BI</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($bi_anomalie_majs_c as $bi_anomalie_majs_c)
                        
                        <td>{{$bi_anomalie_majs_c->titre}}</td>
                        
                        <td>{{$bi_anomalie_majs_c->name}}</td>
                        

                        <td style="color: red;font-weight: bolder; ">{{$bi_anomalie_majs_c->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_ano_maj/{{$bi_anomalie_majs_c->id}}/details_ano_maj">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>

            
                    <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                                                
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: red;"  >BO</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_bo_rap_c as $liste_bo_rap_c)
                        
                        <td>Rapport BO</td>
                        
                        <td>{{$liste_bo_rap_c->name}}</td>
                        

                        <td style="color: red;font-weight: bolder; ">{{$liste_bo_rap_c->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_bo_rap/{{$liste_bo_rap_c->id}}/details_bo_rap">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>
            
                    <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                       
                        
                            <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: red; "  >BO</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_bo_r_c as $liste_bo_r_c)
                        
                        <td>{{$liste_bo_r_c->titre}}</td>
                        
                        <td>{{$liste_bo_r_c->name}}</td>
                        

                        <td style="color: red; font-weight: bolder;">{{$liste_bo_r_c->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_bo_r/{{$liste_bo_r_c->id}}/details_bo_r">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>
                    <div style="margin-left: 15px;">
            
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                      
                        
                            <th scope="col" style="text-align: center; font-size: 20px;  font-weight: bold; color: slateblue;"  >AE</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_analyse_c as $liste_analyse_c)
                        
                        <td>Analyse</td>
                        
                        <td>{{$liste_analyse_c->name}}</td>
                        

                        <td style="color: red;font-weight: bolder; ">{{$liste_analyse_c->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_analyse/{{$liste_analyse_c->id}}/details_analyse">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>

                    </table>
                </div>

                <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                        
                        
                            <th scope="col" style="text-align: center; font-size: 20px;  font-weight: bold; color: slateblue; "  >AE</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_extraction_c as $liste_extraction_c)
                        
                        <td>Extraction</td>
                        
                        <td>{{$liste_extraction_c->name}}</td>
                        

                        <td style="color: red; font-weight: bolder;">{{$liste_extraction_c->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_extraction/{{$liste_extraction_c->id}}/details_extraction">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>

                     </table>
                    </div>
            
         </div>
         
         <div  style=" display: inline-flex ; overflow-x: scroll; height: 305px; width: 100%; " >
           
            
                
                <div >
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                        
                        
                            <th scope="col" style="text-align: center; font-size: 20px;  font-weight: bold; color: rgba(238, 182, 0, 0.639); "  >RPA</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($liste_process_rpa_c as $liste_process_rpa_c)
                        
                        <td>Process RPA</td>
                        
                        <td>{{$liste_process_rpa_c->name}}</td>
                        

                        <td style="color: red;font-weight: bolder; ">{{$liste_process_rpa_c->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_process_rpa/{{$liste_process_rpa_c->id}}/details_process_rpa">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>

                     </table>

                  
                  </div>
            <div>
                <table class="table table-striped" style="text-align: center; width: 400px; margin-left: 15px;">
                    <thead>
                   
                    
                        <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: rgba(238, 182, 0, 0.639); "  >RPA</th>
                    <th scope="col" style="text-align: center;" >Nom</th>
                    <th scope="col" style="text-align: center;">Etat</th>
                    <th></th>
                

                </thead>
                <tbody>
                    <tr>

                        
                    @foreach($liste_au_ano_maj_c as $liste_au_ano_maj_c)
                    
                    <td>{{$liste_au_ano_maj_c->titre}}</td>
                    
                    <td>{{$liste_au_ano_maj_c->name}}</td>
                    

                    <td style="color: red; font-weight: bolder;">{{$liste_au_ano_maj_c->etat}}</td>

                    <td>
                        <a class="btn btn-primary" href="/liste_au_ano_maj/{{$liste_au_ano_maj_c->id}}/details_au_ano_maj">...</a>
                    </td>
                    
                    </tr>
                    @endforeach
                </tbody>
        
                </table>
            


             </div>
             <div>
                <table class="table table-striped" style="text-align: center; margin-left: 10px;">
                    <thead>
                   
                    
                        <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: rgb(84, 228, 0); width: 350px; "  >SharePoint</th>
                    <th scope="col" style="text-align: center;" >Nom</th>
                    <th scope="col" style="text-align: center;">Etat</th>
                    <th></th>
                

                </thead>
                <tbody>
                    <tr>

                        
                    @foreach($l_d_droit_c as $l_d_droit_c)
                    
                    
                    <td>Demande de Droit</td>
                    <td>{{$l_d_droit_c->name}}</td>
                    

                    <td style="color: red; font-weight: bolder;">{{$l_d_droit_c->etat}}</td>

                    <td>
                        <a class="btn btn-primary" href="/l_d_droit/{{$l_d_droit_c->id}}/details_l_d_droit">...</a>
                    </td>
                    
                    </tr>
                    @endforeach
                </tbody>
        
                </table>
            


             </div>
             <div>
                <table class="table table-striped" style="text-align: center; margin-left: 60px;">
                    <thead>
                   
                    
                        <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: rgb(84, 228, 0); "  >SharePoint</th>
                    <th scope="col" style="text-align: center;" >Nom</th>
                    <th scope="col" style="text-align: center;">Etat</th>
                    <th></th>
                

                </thead>
                <tbody>
                    <tr>

                        
                    @foreach($ll_d_droit_c as $ll_d_droit_c)
                    
                    
                    <td>Lists des droits</td>
                    <td>{{$ll_d_droit_c->name}}</td>
                    

                    <td style="color: red; font-weight: bolder;">{{$ll_d_droit_c->etat}}</td>

                    <td>
                        <a class="btn btn-primary" href="/ll_d_droit/{{$ll_d_droit_c->id}}/details_ll_d_droit">...</a>
                    </td>
                    
                    </tr>
                    @endforeach
                </tbody>
        
                </table>
            


             </div>
        
        
        
        
        </div>
</div>


</body>

<script>
       function changestatus()
       {
           var status=document.getElementById("status");
      
           if(status.value=="nv")
           {
            document.getElementById("t11").style.visibility="visible";
            document.getElementById("t21").style.visibility="hidden";
            document.getElementById("t31").style.visibility="hidden";

            
           } 
          
           if(status.value=="ec"){

            document.getElementById("t21").style.visibility="visible";
            document.getElementById("t11").style.visibility="hidden";
            document.getElementById("t31").style.visibility="hidden";
           }

           if(status.value=="cl"){
            document.getElementById("t31").style.visibility="visible";
            document.getElementById("t11").style.visibility="hidden";
            document.getElementById("t21").style.visibility="hidden";
           }
         
       }
   </script>
</html>

@endsection