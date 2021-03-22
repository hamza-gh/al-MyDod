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
         
                  
         return view('Admin.liste_total' , ['bi_anomalie_majs' => $bi_anomalie_majs,
             'liste_bi_rapports' => $liste_bi_rapports,
             'liste_bo_rap' => $liste_bo_rap,
             'liste_bo_r' => $liste_bo_r,
             'liste_analyse' => $liste_analyse,
             'liste_extraction' => $liste_extraction,
             'liste_process_rpa' => $liste_process_rpa,
             'liste_au_ano_maj' => $liste_au_ano_maj
             ]);

        /*$liste_incident =DB::table('incidents')->get();
              
             //return view('Admin.liste_total' , ['liste_incident' => $liste_incident]);

        $l_d_droit =DB::table('sh_droits')->get();
             //return view('EB.sharepoint.l_d_droit' , ['l_d_droit' => $l_d_droit]);

             
        $ll_d_droit =DB::table('sh_l_droits')->get();
              
             //return view('EB.sharepoint.ll_d_droit' , ['ll_d_droit' => $ll_d_droit]);*/


         //   dd($liste_incident,$liste_au_ano_maj,$liste_process_rpa,$liste_extraction,$liste_analyse,$liste_bo_r,$liste_bo_rap,$liste_ano_maj,$liste_bi_rapports);

       


        
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
         
                  
         return view('Admin.EB.mes_list' , ['bi_anomalie_majs' => $bi_anomalie_majs,
             'liste_bi_rapports' => $liste_bi_rapports,
             'liste_bo_rap' => $liste_bo_rap,
             'liste_bo_r' => $liste_bo_r,
             'liste_analyse' => $liste_analyse,
             'liste_extraction' => $liste_extraction,
             'liste_process_rpa' => $liste_process_rpa,
             'liste_au_ano_maj' => $liste_au_ano_maj
             ]);

    }


}






/*$results = DB::select('select * from bi_anomalie_majs);
dd($first);*/