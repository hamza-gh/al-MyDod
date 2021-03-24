<?php

namespace App\Http\Controllers;
use App\Models\Au_proc;
use App\Models\Bi_anomalie_maj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function liste_nv(Request $request)
    {
        
      /* $l =DB::table('bi_anomalie_majs')->get();
       $x =DB::table('au_procs')->get();
        dd($l,$x);*/

        $l=DB::select('EXEC aa');
        $x=DB::select('select etat from bi_anomalie_majs ');

        dd($l,$x);


        /*$l = DB::select('select a.etat,b.etat from bi_anomalie_majs b, au_procs a');
        dd($l);
        
     /*  $l =DB::table('bi_anomalie_majs')
        ->join('au_procs', 'bi_anomalie_majs.etat', '=', 'au_procs.etat')
        ->where('etat','Nouveau')
        ->get();

        dd($l);
        //return view('Admin.liste_total' , ['ic' => $l]);*/
    }


    public function m_demande(){
         
     $nowy = date_create()->format('Y');
     $nowm = date_create()->format('m');
     $nowd = date_create()->format('d');

      // liste des nouveau juste d'aujourd'hui
       /* $liste_bi_rapports = DB::select('select * from bi_rapports where etat=? and day(created_at) =? and month(created_at) =?
         and year(created_at)=?' 
         , ['Nouveau', $nowd,$nowm,$nowy] );*/
         
         

        $liste_bi_rapports = DB::select('select b.id,u.name,b.etat from bi_rapports b,users u  where b.email_user=u.email and b.etat=?
         ORDER BY b.updated_at desc', ['Nouveau'] );
     

       
          $bi_anomalie_majs = DB::select('select b.id,u.name,b.titre,b.etat from bi_anomalie_majs b,users u  where b.email_user=u.email and b.etat=? 
          ORDER BY b.updated_at desc', ['Nouveau'] );
             
               

             
        
        $liste_bo_rap = DB::select('select b.id,u.name,b.etat from bo_rapports b,users u 
         where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['Nouveau'] );
             
           


        

      
       $liste_bo_r = DB::select('select b.id,u.name,b.titre,b.etat from bo_maj_replans b,users u
         where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['Nouveau'] );
             
             
           

        
        $liste_analyse = DB::select('select b.id,u.name,b.etat from ae_analyses b,users u
          where b.email_user=u.email
           and b.etat=? ORDER BY b.updated_at desc', ['Nouveau'] );
             
             
            
          
           $liste_extraction = DB::select('select b.id,u.name,b.etat from ae_extractions b,users u
           where b.email_user=u.email
            and b.etat=? ORDER BY b.updated_at desc', ['Nouveau'] );
  
            


            $liste_process_rpa = DB::select('select b.id,u.name,b.etat from au_procs b,users u
            where b.email_user=u.email
            and b.etat=? ORDER BY b.updated_at desc', ['Nouveau'] );
          
           
             
               
            $liste_au_ano_maj = DB::select('select b.id,u.name,b.titre,b.etat from au_anomalie_majs b,users u
            where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['Nouveau'] );
         
                  

      
             $l_d_droit = DB::select('select b.id,u.name,b.etat from sh_droits b,users u
             where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['Nouveau'] );
          
            

            
             $ll_d_droit = DB::select('select b.id,u.name,b.etat from sh_l_droits b,users u
             where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['Nouveau'] );
            
                /////////////////////////////////////////////////////////// 
                //partie en cours
                
 
         $liste_bi_rapports_e = DB::select('select b.id,u.name,b.etat from bi_rapports b,users u  where b.email_user=u.email and b.etat=?
         ORDER BY b.updated_at desc', ['En cours'] );
     

       
          $bi_anomalie_majs_e = DB::select('select b.id,u.name,b.titre,b.etat from bi_anomalie_majs b,users u  where b.email_user=u.email and b.etat=? 
          ORDER BY b.updated_at desc', ['En cours'] );
             
               

             
        
        $liste_bo_rap_e = DB::select('select b.id,u.name,b.etat from bo_rapports b,users u 
         where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['En cours'] );
             
           


        

      
       $liste_bo_r_e = DB::select('select b.id,u.name,b.titre,b.etat from bo_maj_replans b,users u
         where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['En cours'] );
             
             
           

        
        $liste_analyse_e = DB::select('select b.id,u.name,b.etat from ae_analyses b,users u
          where b.email_user=u.email
           and b.etat=? ORDER BY b.updated_at desc', ['En cours'] );
             
             
            
          
           $liste_extraction_e = DB::select('select b.id,u.name,b.etat from ae_extractions b,users u
           where b.email_user=u.email
            and b.etat=? ORDER BY b.updated_at desc', ['En cours'] );
  
            


            $liste_process_rpa_e = DB::select('select b.id,u.name,b.etat from au_procs b,users u
            where b.email_user=u.email
            and b.etat=? ORDER BY b.updated_at desc', ['En cours'] );
          
           
             
               
            $liste_au_ano_maj_e = DB::select('select b.id,u.name,b.titre,b.etat from au_anomalie_majs b,users u
            where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['En cours'] );
         
                  

      
             $l_d_droit_e = DB::select('select b.id,u.name,b.etat from sh_droits b,users u
             where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['En cours'] );
          
            

            
             $ll_d_droit_e = DB::select('select b.id,u.name,b.etat from sh_l_droits b,users u
             where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['En cours'] );
            

             // clos situation list

             
         $liste_bi_rapports_c = DB::select('select b.id,u.name,b.etat from bi_rapports b,users u  where b.email_user=u.email and b.etat=?
         ORDER BY b.updated_at desc', ['Clos'] );
     

       
          $bi_anomalie_majs_c = DB::select('select b.id,u.name,b.titre,b.etat from bi_anomalie_majs b,users u  where b.email_user=u.email and b.etat=? 
          ORDER BY b.updated_at desc', ['Clos'] );
             
               

             
        
        $liste_bo_rap_c = DB::select('select b.id,u.name,b.etat from bo_rapports b,users u 
         where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['Clos'] );
             
           


        

      
       $liste_bo_r_c = DB::select('select b.id,u.name,b.titre,b.etat from bo_maj_replans b,users u
         where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['Clos'] );
             
             
           

        
        $liste_analyse_c = DB::select('select b.id,u.name,b.etat from ae_analyses b,users u
          where b.email_user=u.email
           and b.etat=? ORDER BY b.updated_at desc', ['Clos'] );
             
             
            
          
           $liste_extraction_c = DB::select('select b.id,u.name,b.etat from ae_extractions b,users u
           where b.email_user=u.email
            and b.etat=? ORDER BY b.updated_at desc', ['Clos'] );
  
            


            $liste_process_rpa_c = DB::select('select b.id,u.name,b.etat from au_procs b,users u
            where b.email_user=u.email
            and b.etat=? ORDER BY b.updated_at desc', ['Clos'] );
          
           
             
               
            $liste_au_ano_maj_c = DB::select('select b.id,u.name,b.titre,b.etat from au_anomalie_majs b,users u
            where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['Clos'] );
         
                  

      
             $l_d_droit_c = DB::select('select b.id,u.name,b.etat from sh_droits b,users u
             where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['Clos'] );
          
            

            
             $ll_d_droit_c = DB::select('select b.id,u.name,b.etat from sh_l_droits b,users u
             where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['Clos'] );
            
              

            

             return view('Admin.liste_total' , ['bi_anomalie_majs' => $bi_anomalie_majs,
             'liste_bi_rapports' => $liste_bi_rapports,
             'liste_bo_rap' => $liste_bo_rap,
             'liste_bo_r' => $liste_bo_r,
             'liste_analyse' => $liste_analyse,
             'liste_extraction' => $liste_extraction,
             'liste_process_rpa' => $liste_process_rpa,
             'liste_au_ano_maj' => $liste_au_ano_maj,
             'l_d_droit' => $l_d_droit,
             'll_d_droit' => $ll_d_droit,
             'bi_anomalie_majs_e' => $bi_anomalie_majs_e,
             'liste_bi_rapports_e' => $liste_bi_rapports_e,
             'liste_bo_rap_e' => $liste_bo_rap_e,
             'liste_bo_r_e' => $liste_bo_r_e,
             'liste_analyse_e' => $liste_analyse_e,
             'liste_extraction_e' => $liste_extraction_e,
             'liste_process_rpa_e' => $liste_process_rpa_e,
             'liste_au_ano_maj_e' => $liste_au_ano_maj_e,
             'l_d_droit_e' => $l_d_droit_e,
             'll_d_droit_e' => $ll_d_droit_e,
             'bi_anomalie_majs_c' => $bi_anomalie_majs_c,
              'liste_bi_rapports_c' => $liste_bi_rapports_c,
              'liste_bo_rap_c' => $liste_bo_rap_c,
              'liste_bo_r_c' => $liste_bo_r_c,
              'liste_analyse_c' => $liste_analyse_c,
              'liste_extraction_c' => $liste_extraction_c,
              'liste_process_rpa_c' => $liste_process_rpa_c,
              'liste_au_ano_maj_c' => $liste_au_ano_maj_c,
              'l_d_droit_c' => $l_d_droit_c,
              'll_d_droit_c' => $ll_d_droit_c
             ]);

  /*$liste_incident =DB::table('incidents')->get();
              
             //return view('Admin.liste_total' , ['liste_incident' => $liste_incident]);*/

    }



    
  

 


    public function demande(request $request )
    {

     $nowy = date_create()->format('Y');
     $nowm = date_create()->format('m');
     $nowd = date_create()->format('d');

      // liste des nouveau juste d'aujourd'hui
       /* $liste_bi_rapports = DB::select('select * from bi_rapports where etat=? and day(created_at) =? and month(created_at) =?
         and year(created_at)=?' 
         , ['Nouveau', $nowd,$nowm,$nowy] );*/
         
         

        $liste_bi_rapports = DB::select('select b.id,u.name,b.etat from bi_rapports b,users u  where b.email_user=u.email and b.etat=? and affectation=?
        ORDER BY b.updated_at desc', ['En cours',$request->user()->email]);
     

       
          $bi_anomalie_majs = DB::select('select b.id,u.name,b.titre,b.etat from bi_anomalie_majs b,users u  where b.email_user=u.email and b.etat=? 
          and affectation=?
         ORDER BY b.updated_at desc', ['En cours',$request->user()->email] );
             
               

             
        
        $liste_bo_rap = DB::select('select b.id,u.name,b.etat from bo_rapports b,users u 
         where b.email_user=u.email and b.etat=? and affectation=?
         ORDER BY b.updated_at desc', ['En cours',$request->user()->email] );
             
           


        

      
       $liste_bo_r = DB::select('select b.id,u.name,b.titre,b.etat from bo_maj_replans b,users u
         where b.email_user=u.email and b.etat=? and affectation=?
         ORDER BY b.updated_at desc', ['En cours',$request->user()->email] );
             
             
           

        
        $liste_analyse = DB::select('select b.id,u.name,b.etat from ae_analyses b,users u
          where b.email_user=u.email
           and b.etat=? and affectation=?
           ORDER BY b.updated_at desc', ['En cours',$request->user()->email] );
             
             
            
          
           $liste_extraction = DB::select('select b.id,u.name,b.etat from ae_extractions b,users u
           where b.email_user=u.email
            and b.etat=? and affectation=?
            ORDER BY b.updated_at desc', ['En cours',$request->user()->email] );
  
            


            $liste_process_rpa = DB::select('select b.id,u.name,b.etat from au_procs b,users u
            where b.email_user=u.email
            and b.etat=? and affectation=?
            ORDER BY b.updated_at desc', ['En cours',$request->user()->email] );
          
           
             
               
            $liste_au_ano_maj = DB::select('select b.id,u.name,b.titre,b.etat from au_anomalie_majs b,users u
            where b.email_user=u.email and b.etat=? and affectation=?
            ORDER BY b.updated_at desc', ['En cours',$request->user()->email] );
         
            $l_d_droit = DB::select('select b.id,u.name,b.etat from sh_droits b,users u
            where b.email_user=u.email and b.etat=? and affectation=?
            ORDER BY b.updated_at desc', ['En cours',$request->user()->email] );
         
           

           
            $ll_d_droit = DB::select('select b.id,u.name,b.etat from sh_l_droits b,users u
            where b.email_user=u.email and b.etat=? and affectation=?
            ORDER BY b.updated_at desc', ['En cours',$request->user()->email]  );
                  

            
     $liste_bi_rapports_nv = DB::select('select b.id,u.name,b.etat from bi_rapports b,users u  where b.email_user=u.email and b.etat=? and affectation=?
     ORDER BY b.updated_at desc', ['Nouveau',$request->user()->email]);
  

    
       $bi_anomalie_majs_nv = DB::select('select b.id,u.name,b.titre,b.etat from bi_anomalie_majs b,users u  where b.email_user=u.email and b.etat=? 
       and affectation=?
      ORDER BY b.updated_at desc', ['Nouveau',$request->user()->email] );
          
            

          
     
     $liste_bo_rap_nv = DB::select('select b.id,u.name,b.etat from bo_rapports b,users u 
      where b.email_user=u.email and b.etat=? and affectation=?
      ORDER BY b.updated_at desc', ['Nouveau',$request->user()->email] );
          
        


     

   
    $liste_bo_r_nv = DB::select('select b.id,u.name,b.titre,b.etat from bo_maj_replans b,users u
      where b.email_user=u.email and b.etat=? and affectation=?
      ORDER BY b.updated_at desc', ['Nouveau',$request->user()->email] );
          
          
        

     
     $liste_analyse_nv = DB::select('select b.id,u.name,b.etat from ae_analyses b,users u
       where b.email_user=u.email
        and b.etat=? and affectation=?
        ORDER BY b.updated_at desc', ['Nouveau',$request->user()->email] );
          
          
         
       
        $liste_extraction_nv = DB::select('select b.id,u.name,b.etat from ae_extractions b,users u
        where b.email_user=u.email
         and b.etat=? and affectation=?
         ORDER BY b.updated_at desc', ['Nouveau',$request->user()->email] );

         


         $liste_process_rpa_nv = DB::select('select b.id,u.name,b.etat from au_procs b,users u
         where b.email_user=u.email
         and b.etat=? and affectation=?
         ORDER BY b.updated_at desc', ['Nouveau',$request->user()->email] );
       
        
          
            
         $liste_au_ano_maj_nv = DB::select('select b.id,u.name,b.titre,b.etat from au_anomalie_majs b,users u
         where b.email_user=u.email and b.etat=? and affectation=?
         ORDER BY b.updated_at desc', ['Nouveau',$request->user()->email] );
      
         $l_d_droit_nv = DB::select('select b.id,u.name,b.etat from sh_droits b,users u
         where b.email_user=u.email and b.etat=? and affectation=?
         ORDER BY b.updated_at desc', ['Nouveau',$request->user()->email] );
      
        

        
         $ll_d_droit_nv = DB::select('select b.id,u.name,b.etat from sh_l_droits b,users u
         where b.email_user=u.email and b.etat=? and affectation=?
         ORDER BY b.updated_at desc', ['Nouveau',$request->user()->email]  );


         return view('Admin.EB.mes_list' , ['bi_anomalie_majs' => $bi_anomalie_majs,
             'liste_bi_rapports' => $liste_bi_rapports,
             'liste_bo_rap' => $liste_bo_rap,
             'liste_bo_r' => $liste_bo_r,
             'liste_analyse' => $liste_analyse,
             'liste_extraction' => $liste_extraction,
             'liste_process_rpa' => $liste_process_rpa,
             'liste_au_ano_maj' => $liste_au_ano_maj,
             'l_d_droit' => $l_d_droit,
             'll_d_droit' => $ll_d_droit,

             'bi_anomalie_majs_nv' => $bi_anomalie_majs_nv,

             'liste_bi_rapports_nv' => $liste_bi_rapports_nv,
             'liste_bo_rap_nv' => $liste_bo_rap_nv,
             'liste_bo_r_nv' => $liste_bo_r_nv,
             'liste_analyse_nv' => $liste_analyse_nv,
             'liste_extraction_nv' => $liste_extraction_nv,
             'liste_process_rpa_nv' => $liste_process_rpa_nv,
             'liste_au_ano_maj_nv' => $liste_au_ano_maj_nv,
             'l_d_droit_nv' => $l_d_droit_nv,
             'll_d_droit_nv' => $ll_d_droit_nv,

             ]);

    }

public function demande_nv()
{
  $nowy = date_create()->format('Y');
  $nowm = date_create()->format('m');
  $nowd = date_create()->format('d');

   // liste des nouveau juste d'aujourd'hui
    /* $liste_bi_rapports = DB::select('select * from bi_rapports where etat=? and day(created_at) =? and month(created_at) =?
      and year(created_at)=?' 
      , ['Nouveau', $nowd,$nowm,$nowy] );*/
      
      

               
      return view('Admin.EB.mes_list' , [
          ]);

}

public function demande_clo()
{
  $nowy = date_create()->format('Y');
  $nowm = date_create()->format('m');
  $nowd = date_create()->format('d');

   // liste des nouveau juste d'aujourd'hui
    /* $liste_bi_rapports = DB::select('select * from bi_rapports where etat=? and day(created_at) =? and month(created_at) =?
      and year(created_at)=?' 
      , ['Nouveau', $nowd,$nowm,$nowy] );*/
      
      

     $liste_bi_rapports_clo = DB::select('select b.id,u.name,b.etat from bi_rapports b,users u  where b.email_user=u.email and b.etat=? and affectation=?
     ORDER BY b.updated_at desc', ['Clos',$request->user()->email]);
  

    
       $bi_anomalie_majs_clo = DB::select('select b.id,u.name,b.titre,b.etat from bi_anomalie_majs b,users u  where b.email_user=u.email and b.etat=? 
       and affectation=?
      ORDER BY b.updated_at desc', ['Clos',$request->user()->email] );
          
            

          
     
     $liste_bo_rap_clo = DB::select('select b.id,u.name,b.etat from bo_rapports b,users u 
      where b.email_user=u.email and b.etat=? and affectation=?
      ORDER BY b.updated_at desc', ['Clos',$request->user()->email] );
          
        


     

   
    $liste_bo_r_clo = DB::select('select b.id,u.name,b.titre,b.etat from bo_maj_replans b,users u
      where b.email_user=u.email and b.etat=? and affectation=?
      ORDER BY b.updated_at desc', ['Clos',$request->user()->email] );
          
          
        

     
     $liste_analyse_clo = DB::select('select b.id,u.name,b.etat from ae_analyses b,users u
       where b.email_user=u.email
        and b.etat=? and affectation=?
        ORDER BY b.updated_at desc', ['Clos',$request->user()->email] );
          
          
         
       
        $liste_extraction_clo = DB::select('select b.id,u.name,b.etat from ae_extractions b,users u
        where b.email_user=u.email
         and b.etat=? and affectation=?
         ORDER BY b.updated_at desc', ['Clos',$request->user()->email] );

         


         $liste_process_rpa_clo = DB::select('select b.id,u.name,b.etat from au_procs b,users u
         where b.email_user=u.email
         and b.etat=? and affectation=?
         ORDER BY b.updated_at desc', ['Clos',$request->user()->email] );
       
        
          
            
         $liste_au_ano_maj_clo = DB::select('select b.id,u.name,b.titre,b.etat from au_anomalie_majs b,users u
         where b.email_user=u.email and b.etat=? and affectation=?
         ORDER BY b.updated_at desc', ['Clos',$request->user()->email] );
      
         $l_d_droit_clo = DB::select('select b.id,u.name,b.etat from sh_droits b,users u
         where b.email_user=u.email and b.etat=? and affectation=?
         ORDER BY b.updated_at desc', ['Clos',$request->user()->email] );
      
        

        
         $ll_d_droit_clo = DB::select('select b.id,u.name,b.etat from sh_l_droits b,users u
         where b.email_user=u.email and b.etat=? and affectation=?
         ORDER BY b.updated_at desc', ['Clos',$request->user()->email]  );
               
      return view('Admin.EB.mes_list' , ['bi_anomalie_majs_clo' => $bi_anomalie_majs_clo,
          'liste_bi_rapports_clo' => $liste_bi_rapports_clo,
          'liste_bo_rap_clo' => $liste_bo_rap_clo,
          'liste_bo_r_clo' => $liste_bo_r_clo,
          'liste_analyse_clo' => $liste_analyse_clo,
          'liste_extraction_clo' => $liste_extraction_clo,
          'liste_process_rpa_clo' => $liste_process_rpa_clo,
          'liste_au_ano_maj_clo' => $liste_au_ano_maj_clo,
          'l_d_droit_clo' => $l_d_droit_clo,
          'll_d_droit_clo' => $ll_d_droit_clo
          ]);

}





  // partie incident
    public function in_demande()
    {
      $liste_incident_n = DB::select('select b.id,u.name,b.etat from incidents b,users u
      where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['Nouveau'] );
     
      $liste_incident_e = DB::select('select b.id,u.name,b.etat from incidents b,users u
      where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['En cours'] );
      
      $liste_incident_c = DB::select('select b.id,u.name,b.etat from incidents b,users u
      where b.email_user=u.email and b.etat=? ORDER BY b.updated_at desc', ['Clos'] );
      
    
              
             
        
          return view('Admin.a_incident.A_l_incident' , ['liste_incident_n' => $liste_incident_n,
          'liste_incident_e' => $liste_incident_e,
          'liste_incident_c' => $liste_incident_c,
          
          ]);
    }




}






/*$results = DB::select('select * from bi_anomalie_majs);
dd($first);*/