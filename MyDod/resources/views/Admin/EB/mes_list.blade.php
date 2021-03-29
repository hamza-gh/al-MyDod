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
   </style>
</head>
<body >
<div>
    <select class="float-right"  id="status" style="margin-right: 200px;
     width: auto; height:  25px; 
     margin-bottom: 10px;
     display: flex;flex-direction: column;"
      onchange="changestatus()">
  
        <option value="ec">En cours</option>
        <option value="nv" >Nouveau</option>
  </select>
</div>

<div id="t1">
        <div style=" display: inline-flex; overflow-x: scroll; height: 305px;width: 100%; " >

                    <div >
                    <table class="table table-striped " style=" text-align: center; width: 400px;" >
                        <thead>
                            
                       
                        
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: blue;" >Rapport Power BI</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                    
                        <tr >

                            
                        @foreach($liste_bi_rapports as $i)
                        <td>Rapport BI</td>
                        
                        <td>{{$i->name}}</td>
                        

                        <td style="color: orange;font-weight: bolder;  ">{{$i->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="liste_bi_rapports/{{$i->id}}/details_bi_rapports">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>
           

                <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center; overflow-y:scroll;width: 400px;">
                        <thead>
                        
                        
                            <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: blue;"  >Mise à jour/Anomalie</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    

                    </thead>
                    <tbody>
                        <tr>

                            
                        @foreach($bi_anomalie_majs as $bi_anomalie_majs)
                        
                        <td>{{$bi_anomalie_majs->titre}}</td>
                        
                        <td>{{$bi_anomalie_majs->name}}</td>
                        

                        <td style="color: orange;font-weight: bolder;  ">{{$bi_anomalie_majs->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_ano_maj/{{$bi_anomalie_majs->id}}/details_ano_maj">...</a>
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

                            
                        @foreach($liste_bo_rap as $liste_bo_rap)
                        
                        <td>Rapport BO</td>
                        
                        <td>{{$liste_bo_rap->name}}</td>
                        

                        <td style="color: orange;font-weight: bolder;  ">{{$liste_bo_rap->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_bo_rap/{{$liste_bo_rap->id}}/details_bo_rap">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>
            
                    <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center;width: 410px;">
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
                        

                        <td style="color: orange;font-weight: bolder;  ">{{$liste_bo_r->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_bo_r/{{$liste_bo_r->id}}/details_bo_r">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                </div>
                    <div style="margin-left: 15px;">
            
                    <table class="table table-striped" style="text-align: center;width: 400px;">
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
                        

                        <td style="color: orange;font-weight: bolder;  ">{{$liste_analyse->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_analyse/{{$liste_analyse->id}}/details_analyse">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>

                    </table>
                </div>

                <div style="margin-left: 15px;">
                    <table class="table table-striped" style="text-align: center;width: 400px;">
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
                        

                        <td style="color: orange;font-weight: bolder;  ">{{$liste_extraction->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_extraction/{{$liste_extraction->id}}/details_extraction">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>

                     </table>
                    </div>
            
         </div>
         
         <div style=" display: inline-flex ; overflow-x: scroll; height: 370px;width: 100%; " >
           
            
                
                <div sty>
                    <table class="table table-striped" style="text-align: center;width: 500px;">
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
                        

                        <td style="color: orange;font-weight: bolder;  ">{{$liste_process_rpa->etat}}</td>

                        <td>
                            <a class="btn btn-primary" href="/liste_process_rpa/{{$liste_process_rpa->id}}/details_process_rpa">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>

                     </table>

                  
                  </div>
            <div>
                <table class="table table-striped" style="text-align: center; margin-left: 15px;width: 400px;">
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
                    

                    <td style="color: orange;font-weight: bolder;  ">{{$liste_au_ano_maj->etat}}</td>

                    <td>
                        <a class="btn btn-primary" href="/liste_au_ano_maj/{{$liste_au_ano_maj->id}}/details_au_ano_maj">...</a>
                    </td>
                    
                    </tr>
                    @endforeach
                </tbody>
        
                </table>
            


             </div>
             <div>
                <table class="table table-striped" style="text-align: center; margin-left: 10px;width: 450px;">
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
                    

                    <td style="color: orange;font-weight: bolder;  ">{{$l_d_droit->etat}}</td>

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
                    

                    <td style="color: orange; font-weight: bolder; ">{{$ll_d_droit->etat}}</td>

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

        
        <!-- les nouveau demande affecter a l'admin-->

        <div id="t2" style="margin-top: -675px; visibility: hidden;">
            <div style=" display: inline-flex; overflow-x: scroll; height: 305px;width: 100%; " >
    
                        <div >
                        <table class="table table-striped " style=" text-align: center; width: 400px;" >
                            <thead>
                                
                           
                            
                                <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: blue;" >BI</th>
                            <th scope="col" style="text-align: center;" >Nom</th>
                            <th scope="col" style="text-align: center;">Etat</th>
                            <th></th>
                        
    
                        </thead>
                        <tbody>
                        
                            <tr >
    
                                
                            @foreach($liste_bi_rapports_nv as $liste_bi_rapports_nv)
                            <td>Rapport BI</td>
                            
                            <td>{{$liste_bi_rapports_nv->name}}</td>
                            
    
                            <td style="color: green;font-weight: bolder;  ">{{$liste_bi_rapports_nv->etat}}</td>
    
                            <td>
                                <a class="btn btn-primary" href="liste_bi_rapports/{{$liste_bi_rapports_nv->id}}/details_bi_rapports">...</a>
                            </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                
                        </table>
                    </div>
               
    
                    <div style="margin-left: 15px;">
                        <table class="table table-striped" style="text-align: center; overflow-y:scroll;width: 400px;">
                            <thead>
                            
                            
                                <th scope="col" style="text-align: center; font-size: 20px; font-weight: bold; color: blue;"  >BI</th>
                            <th scope="col" style="text-align: center;" >Nom</th>
                            <th scope="col" style="text-align: center;">Etat</th>
                            <th></th>
                        
    
                        </thead>
                        <tbody>
                            <tr>
    
                                
                            @foreach($bi_anomalie_majs_nv as $bi_anomalie_majs_nv)
                            
                            <td>{{$bi_anomalie_majs_nv->titre}}</td>
                            
                            <td>{{$bi_anomalie_majs_nv->name}}</td>
                            
    
                            <td style="color: green;font-weight: bolder;  ">{{$bi_anomalie_majs_nv->etat}}</td>
    
                            <td>
                                <a class="btn btn-primary" href="/liste_ano_maj/{{$bi_anomalie_majs_nv->id}}/details_ano_maj">...</a>
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
    
                                
                            @foreach($liste_bo_rap_nv as $liste_bo_rap_nv)
                            
                            <td>Rapport BO</td>
                            
                            <td>{{$liste_bo_rap_nv->name}}</td>
                            
    
                            <td style="color: green;font-weight: bolder;  ">{{$liste_bo_rap_nv->etat}}</td>
    
                            <td>
                                <a class="btn btn-primary" href="/liste_bo_rap/{{$liste_bo_rap_nv->id}}/details_bo_rap">...</a>
                            </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                
                        </table>
                    </div>
                
                        <div style="margin-left: 15px;">
                        <table class="table table-striped" style="text-align: center;width: 410px;">
                            <thead>
                           
                            
                                <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: red; "  >BO</th>
                            <th scope="col" style="text-align: center;" >Nom</th>
                            <th scope="col" style="text-align: center;">Etat</th>
                            <th></th>
                        
    
                        </thead>
                        <tbody>
                            <tr>
    
                                
                            @foreach($liste_bo_r_nv as $liste_bo_r_nv)
                            
                            <td>{{$liste_bo_r_nv->titre}}</td>
                            
                            <td>{{$liste_bo_r_nv->name}}</td>
                            
    
                            <td style="color: green;font-weight: bolder;  ">{{$liste_bo_r_nv->etat}}</td>
    
                            <td>
                                <a class="btn btn-primary" href="/liste_bo_r/{{$liste_bo_r_nv->id}}/details_bo_r">...</a>
                            </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                
                        </table>
                    </div>
                        <div style="margin-left: 15px;">
                
                        <table class="table table-striped" style="text-align: center;width: 400px;">
                            <thead>
                          
                            
                                <th scope="col" style="text-align: center; font-size: 20px;  font-weight: bold; color: slateblue;"  >AE</th>
                            <th scope="col" style="text-align: center;" >Nom</th>
                            <th scope="col" style="text-align: center;">Etat</th>
                            <th></th>
                        
    
                        </thead>
                        <tbody>
                            <tr>
    
                                
                            @foreach($liste_analyse_nv as $liste_analyse_nv)
                            
                            <td>Analyse</td>
                            
                            <td>{{$liste_analyse_nv->name}}</td>
                            
    
                            <td style="color: green;font-weight: bolder;  ">{{$liste_analyse_nv->etat}}</td>
    
                            <td>
                                <a class="btn btn-primary" href="/liste_analyse/{{$liste_analyse_nv->id}}/details_analyse">...</a>
                            </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
    
                        </table>
                    </div>
    
                    <div style="margin-left: 15px;">
                        <table class="table table-striped" style="text-align: center;width: 400px;">
                            <thead>
                            
                            
                                <th scope="col" style="text-align: center; font-size: 20px;  font-weight: bold; color: slateblue; "  >AE</th>
                            <th scope="col" style="text-align: center;" >Nom</th>
                            <th scope="col" style="text-align: center;">Etat</th>
                            <th></th>
                        
    
                        </thead>
                        <tbody>
                            <tr>
    
                                
                            @foreach($liste_extraction_nv as $liste_extraction_nv)
                            
                            <td>Extraction</td>
                            
                            <td>{{$liste_extraction_nv->name}}</td>
                            
    
                            <td style="color: green;font-weight: bolder;  ">{{$liste_extraction_nv->etat}}</td>
    
                            <td>
                                <a class="btn btn-primary" href="/liste_extraction/{{$liste_extraction_nv->id}}/details_extraction">...</a>
                            </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
    
                         </table>
                        </div>
                
             </div>
             
             <div style=" display: inline-flex ; overflow-x: scroll; height: 370px;width: 100%; " >
               
                
                    
                    <div sty>
                        <table class="table table-striped" style="text-align: center;width: 500px;">
                            <thead>
                            
                            
                                <th scope="col" style="text-align: center; font-size: 20px;  font-weight: bold; color: rgba(238, 182, 0, 0.639); "  >RPA</th>
                            <th scope="col" style="text-align: center;" >Nom</th>
                            <th scope="col" style="text-align: center;">Etat</th>
                            <th></th>
                        
    
                        </thead>
                        <tbody>
                            <tr>
    
                                
                            @foreach($liste_process_rpa_nv as $liste_process_rpa_nv)
                            
                            <td>Process RPA</td>
                            
                            <td>{{$liste_process_rpa_nv->name}}</td>
                            
    
                            <td style="color: green;font-weight: bolder; ">{{$liste_process_rpa_nv->etat}}</td>
    
                            <td>
                                <a class="btn btn-primary" href="/liste_process_rpa/{{$liste_process_rpa_nv->id}}/details_process_rpa">...</a>
                            </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
    
                         </table>
    
                      
                      </div>
                <div>
                    <table class="table table-striped" style="text-align: center; margin-left: 15px;width: 400px;">
                        <thead>
                       
                        
                            <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: rgba(238, 182, 0, 0.639); "  >RPA</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    
    
                    </thead>
                    <tbody>
                        <tr>
    
                            
                        @foreach($liste_au_ano_maj_nv as $liste_au_ano_maj_nv)
                        
                        <td>{{$liste_au_ano_maj_nv->titre}}</td>
                        
                        <td>{{$liste_au_ano_maj_nv->name}}</td>
                        
    
                        <td style="color: green;font-weight: bolder;  ">{{$liste_au_ano_maj_nv->etat}}</td>
    
                        <td>
                            <a class="btn btn-primary" href="/liste_au_ano_maj/{{$liste_au_ano_maj_nv->id}}/details_au_ano_maj">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                
    
    
                 </div>
                 <div>
                    <table class="table table-striped" style="text-align: center; margin-left: 10px;width: 450px;">
                        <thead>
                       
                        
                            <th scope="col" style="text-align: center;  font-size: 20px;font-weight: bold; color: rgb(84, 228, 0); "  >SharePoint</th>
                        <th scope="col" style="text-align: center;" >Nom</th>
                        <th scope="col" style="text-align: center;">Etat</th>
                        <th></th>
                    
    
                    </thead>
                    <tbody>
                        <tr>
    
                            
                        @foreach($l_d_droit_nv as $l_d_droit_nv)
                        
                        
                        <td>Demande de Droit</td>
                        <td>{{$l_d_droit_nv->name}}</td>
                        
    
                        <td style="color: green;font-weight: bolder;  ">{{$l_d_droit_nv->etat}}</td>
    
                        <td>
                            <a class="btn btn-primary" href="/l_d_droit/{{$l_d_droit_nv->id}}/details_l_d_droit">...</a>
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
    
                            
                        @foreach($ll_d_droit_nv as $ll_d_droit_nv)
                        
                        
                        <td>Lists des droits</td>
                        <td>{{$ll_d_droit_nv->name}}</td>
                        
    
                        <td style="color: green;font-weight: bolder;  ">{{$ll_d_droit_nv->etat}}</td>
    
                        <td>
                            <a class="btn btn-primary" href="/ll_d_droit/{{$ll_d_droit_nv->id}}/details_ll_d_droit">...</a>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
            
                    </table>
                
                 </div>
            
            </div>
            
    
        </div>


            <!-- les demande clos d'admin connecter-->
            

















         

</body>
<script>
    function changestatus()
    {
        var status=document.getElementById("status");
   
        if(status.value=="nv")
        {
         document.getElementById("t2").style.visibility="visible";
         document.getElementById("t1").style.visibility="hidden";

         
        } 
       
        if(status.value=="ec"){

        document.getElementById("t1").style.visibility="visible";
         document.getElementById("t2").style.visibility="hidden";
         
        }
        refresh();
        
      
    }
</script>

</html>

@endsection