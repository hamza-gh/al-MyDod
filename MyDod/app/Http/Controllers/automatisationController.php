<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Au_proc;
use App\Models\Au_anomalie_maj;

use Illuminate\Foundation\Auth\VerifiesEmails;

class automatisationController extends Controller
{    
    //construct of this controller
    public function __construct(){
  
      
      return $this->middleware('auth');
  
    }

    // Process RPA

    public function rpa_index(Request $request)
    {
         
               $l =DB::table('au_procs')->where('email_user',$request->user()->email)->get();
              
               return view('EB.Automatisation.liste_process_rpa' , ['ic' => $l]);

               
               

    }

    public function rpa_create()
    {
        
    }

   public function rpa_store(Request $request)
   {
    
        $inc = new Au_proc();
       
       $inc->Objectif = $request->input('Objectif');
       $inc->Processus = $request->input('Processus');
       $inc->Processus_etp = $request->input('Processus_etp');
       $inc->Fonctionnalites = $request->input('Fonctionnalites');
       $inc->Planification = $request->input('Planification');
       $inc->Canal = $request->input('Canal');
       $inc->Utilisateurs = $request->input('Utilisateurs');

       if($request->hasfile('pj'))
      {
        $inc->PJ= $request->pj->store('PJ_automatisation');
      }
      
       $inc->email_user = $request->user()->email;
       
       $inc->save();
       
       session()->flash('aj','Process RPA Bien Ajouter');

      return redirect('/process_rpa');

   }
   
   public function rpa_edit($id)
   {
     $ic = Au_proc::find($id);
     return view ('EB.Automatisation.editer_process_rpa',['i'=>$ic]);

   }
   
   public function rpa_update(Request $request,$id)
   {
    $inc = Au_proc::find($id);
    if(auth()->user()->etat=='user'){
      
    $inc->Objectif = $request->input('Objectif');
    $inc->Processus = $request->input('Processus');
    $inc->Processus_etp = $request->input('Processus_etp');
    $inc->Fonctionnalites = $request->input('Fonctionnalites');
    $inc->Planification = $request->input('Planification');
    $inc->Canal = $request->input('Canal');
    $inc->Utilisateurs = $request->input('Utilisateurs');

    $inc->save();

    //flash message
    session()->flash('update','Bien Modifier');

    return redirect('/liste_process_rpa');
   }

    if(auth()->user()->etat=='admin')
    {
   
    $inc->etat = $request->input('etat');
    $inc->affectation = $request->input('affectation');
    $inc->date_echeance = $request->input('date_echeance');
    
    $inc->save();
      return redirect ('/liste_total');
    }
   }
  public function rpa_destroy(Request $request,$id)
  {
    $inc = Au_proc::find($id);

    $inc->delete();
    
    //flash message
    session()->flash('sup','Process RPA Bien Supprimer');

    return redirect('/liste_process_rpa');

  }

  public function rpa_details($id)
   {
     $ic = Au_proc::find($id);
     return view ('EB.Automatisation.details_process_rpa',['i'=>$ic]);

   }



   // anomalie & MAJ RPA

   public function rpa_am_index(Request $request)
        {
             
                   $l =DB::table('au_anomalie_majs')->where('email_user',$request->user()->email)->get();
                  
                   return view('EB.Automatisation.liste_au_ano_maj' , ['ic' => $l]);
    
                   
                   
    
        }
    
        public function rpa_am_create()
        {
            
        }
    
       public function rpa_am_store(Request $request)
       {
        
            $inc = new Au_anomalie_maj();
           
           $inc->nom_pr = $request->input('nom_pr');
           $inc->Descriptif = $request->input('Descriptif');
         
           if($request->input('m')=='Mis à Jour RPA')
           {
             $inc->titre = 'Mis à jour';
             session()->flash('aj','Mis à Jour Bien Ajouter');
           }
           
           if($request->input('a')=='Ajouter une Anomalie RPA')
           {
             $inc->titre = 'Anomalie';
             session()->flash('aj','Anomalie(RPA) Bien Ajouter');
           }
           
       
           $inc->email_user = $request->user()->email;
           
           $inc->save();
           
           
    
          return redirect('/au_ano_maj');

            
        
       }
       
       public function rpa_am_edit($id)
       {
         $ic = Au_anomalie_maj::find($id);
         return view ('EB.Automatisation.editer_au_ano_maj',['inc'=>$ic]);
    
       }
       
       public function rpa_am_update(Request $request,$id)
       {
        $inc = Au_anomalie_maj::find($id);
    
        if(auth()->user()->etat=='user'){
        $inc->nom_pr = $request->input('nom_pr');
        $inc->Descriptif = $request->input('Descriptif');
    
        $inc->save();
    
        //flash message
        session()->flash('update','Anomalie(RPA) Bien Modifier');
    
        return redirect('/liste_au_ano_maj');
       }

        if(auth()->user()->etat=='admin')
        {
      
        $inc->etat = $request->input('etat');
        $inc->affectation = $request->input('affectation');
        $inc->date_echeance = $request->input('date_echeance');
        
        $inc->save();
          return redirect ('/liste_total');
          }    
       }
      public function rpa_am_destroy(Request $request,$id)
      {
        $inc = Au_anomalie_maj::find($id);
    
        $inc->delete();
        
        //flash message
        session()->flash('sup','Anomalie(RPA) Bien Supprimer');
    
        return redirect('/liste_au_ano_maj');
    
      }
    
      public function rpa_am_details($id)
       {
         $ic = Au_anomalie_maj::find($id);
         return view ('EB.Automatisation.details_au_ano_maj',['inc'=>$ic]);
    
       }

}
