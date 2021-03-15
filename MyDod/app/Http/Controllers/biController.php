<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bi_rapport;
use App\Models\Bo_maj_replan;
use App\Models\Ae_extraction;
use App\Models\Bi_anomalie_maj;
use App\Models\Ae_analyse;
use App\Models\bo_rapport;
use App\Http\Controllers\Storage;
use Illuminate\Foundation\Auth\VerifiesEmails;

class biController extends Controller
{
    
  //construct of this controller
  public function __construct(){

    
    return $this->middleware('auth');

  }
   
   
  //Business intelligence
    public function bi_index(Request $request)
    {
         
               $l =DB::table('bi_rapports')->where('email_user',$request->user()->email)->get();
              
               return view('liste_bi_rapports' , ['ic' => $listincident]);

               
               

    }

    public function bi_create()
    {
        
    }

   public function bi_store(Request $request)
   {
    
        $inc = new Bi_rapport();
       
       $inc->objet = $request->input('objet');
       $inc->nom_rapport = $request->input('nom_rapport');
       $inc->technologie = $request->input('technologie');
       $inc->categorie = $request->input('categorie');
       $inc->cycle_de_vie = $request->input('cycle_de_vie');
       $inc->utilisateurs = $request->input('utilisateurs');
       $inc->planification = $request->input('planification');
       if($request->hasfile('pj'))
      {
        $inc->PJ= $request->pj->store('PJ_BI');
      }
      
       $inc->email_user = $request->user()->email;
       
       $inc->save();
       
       session()->flash('aj','Bien Ajouter');

      return redirect('/home');

   }
   
   public function bi_edit($id)
   {
     $ic = Bi_rapport::find($id);
     return view ('editer_nv_rap',['ic'=>$ic]);

   }
   
   public function bi_update(Request $request,$id)
   {
    $inc = Bi_rapport::find($id);

    $inc->objet = $request->input('objet');
    $inc->nom_rapport = $request->input('nom_rapport');
    $inc->technologie = $request->input('technologie');
    $inc->categorie = $request->input('categorie');
    $inc->cycle_de_vie = $request->input('cycle_de_vie');
    $inc->utilisateurs = $request->input('utilisateurs');
    $inc->planification = $request->input('planification');

    $inc->save();

    //flash message
    session()->flash('update','Bien Modifier');

    return redirect('/liste_bi_rapports');

   }
  public function bi_destroy(Request $request,$id)
  {
    $inc = Bi_rapport::find($id);

    $inc->delete();
    
    //flash message
    session()->flash('sup','Bien Supprimer');

    return redirect('/liste_bi_rapports');

  }

  public function bi_details($id)
   {
     $ic = Bi_rapport::find($id);
     return view ('details_bi_rapports',['ic'=>$ic]);

   }

// download file of bi rapport
   public function dw()
   {
     return response()->download('c_bi.xlsx');
   }




        //*-anomalie & mis ajour
      
        public function bi_am_index(Request $request)
        {
             
                   $l =DB::table('bi_anomalie_majs')->where('email_user',$request->user()->email)->get();
                  
                   return view('liste_ano_maj' , ['ic' => $listincident]);
    
                   
                   
    
        }
    
        public function bi_am_create()
        {
            
        }
    
       public function bi_m_store(Request $request)
       {
        
            $inc = new Bi_anomalie_maj();
           
           $inc->nom_rapport = $request->input('nom_rapport');
           $inc->description = $request->input('description');
           if($request->input('m')=='Mis à Jour')
           {
             $inc->titre = 'm';
             session()->flash('aj','Mis à Jour Bien Ajouter');
           }
           if($request->input('anomalie')=='Ajouter une Anomalie')
           {
             $inc->titre = 'a';
             session()->flash('aj','Anomalie Bien Ajouter');
           }
           
       
           $inc->email_user = $request->user()->email;
           
           $inc->save();
           
           
    
          return redirect('/ano_maj');
    
       }
       
       public function bi_am_edit($id)
       {
         $ic = Bi_anomalie_maj::find($id);
         return view ('editer_ano_maj',['ic'=>$ic]);
    
       }
       
       public function bi_am_update(Request $request,$id)
       {
        $inc = Bi_anomalie_maj::find($id);
    
        $inc->nom_rapport = $request->input('nom_rapport');
           $inc->description = $request->input('description');
    
        $inc->save();
    
        //flash message
        session()->flash('update','Bien Modifier');
    
        return redirect('/liste_ano_maj');
    
       }
      public function bi_am_destroy(Request $request,$id)
      {
        $inc = Bi_anomalie_maj::find($id);
    
        $inc->delete();
        
        //flash message
        session()->flash('sup','Bien Supprimer');
    
        return redirect('/liste_ano_maj');
    
      }
    
      public function bi_am_details($id)
       {
         $ic = Bi_anomalie_maj::find($id);
         return view ('details_ano_maj',['ic'=>$ic]);
    
       }




   //BO

       //*nouveau Rapport
   public function bo_r_index(Request $request)
   {
        
              $l =DB::table('bo_rapports')->where('email_user',$request->user()->email)->get();
             
              return view('liste_bo_rap' , ['ic' => $listincident]);

              
              

   }

   public function bo_r_create()
   {
       
   }

  public function bo_r_store(Request $request)
  {
    

       $inc = new Bo_rapport();
       
      
      $inc->object = $request->input('object');
      $inc->n_rapport = $request->input('n_rapport');
      $inc->univers = $request->input('univers');
      $inc->c_extraires = $request->input('c_extraires');
      $inc->filtres = $request->input('filtres');
      $inc->liste_d = $request->input('liste_d');
      $inc->planification = $request->input('planification');
      $inc->serveur = $request->input('serveur');
      
      $inc->email_user = $request->user()->email;
      
      $inc->save();
      
      session()->flash('aj','Rapport Bien Ajouter');

     return redirect('/bo_r');

  }
  
  public function bo_r_edit($id)
  {
    $ic = Bo_rapport::find($id);
    return view ('editer_bo_rap',['ic'=>$ic]);

  }
  
  public function bo_r_update(Request $request,$id)
  {
   $inc = Bo_rapport::find($id);

   $inc->objet = $request->input('objet');
   $inc->Description = $request->input('Description');
   $inc->criticité = $request->input('criticite');

   $inc->save();

   //flash message
   session()->flash('update','Bien Modifier');

   return redirect('/liste_bo_rap');

  }

 public function bo_r_destroy(Request $request,$id)
 {
   $inc = Bo_rapport::find($id);

   $inc->delete();
   
   //flash message
   session()->flash('sup','Bien Supprimer');

   return redirect('/liste_bo_rap');

 }

 public function bo_r_details($id)
  {
    $ic = Bo_rapport::find($id);
    return view ('details_bo_rap',['ic'=>$ic]);

  }


            //* modif & replanification
            public function bo_mp_index(Request $request)
            {
                 
                       $l =DB::table('bo_maj_replans')->where('email_user',$request->user()->email)->get();
                      
                       return view('liste_bo_r' , ['ic' => $listincident]);
         
                       
                       
         
            }
         
            public function bo_mp_create()
            {
                
            }
         
           public function bo_mp_store(Request $request)
           {
             
         
                $inc = new Bo_maj_replan();
                
               
                $inc->n_rapport = $request->input('n_rapport');
                $inc->chemin = $request->input('chemin');
                $inc->description = $request->input('description');
                
                if($request->input('m')=='Ajouter une Modification')
                {
                  $inc->titre = 'm';
                  session()->flash('aj','Mis à Jour Bien Ajouter');
                }
                if($request->input('p')=='Ajouter Planification')
                {
                  $inc->titre = 'p';
                  session()->flash('aj','Anomalie Bien Ajouter');
                }
               
               $inc->email_user = $request->user()->email;
               
               $inc->save();
               
               session()->flash('aj','Rapport Bien Ajouter');
         
              return redirect('/bo_m_r');
         
           }
           
           public function bo_mp_edit($id)
           {
             $ic = Bo_maj_replan::find($id);
             return view ('editer_bo_r',['ic'=>$ic]);
         
           }
           
           public function bo_mp_update(Request $request,$id)
           {
            $inc = Bo_maj_replan::find($id);
         
            $inc->objet = $request->input('objet');
            $inc->Description = $request->input('Description');
            $inc->criticité = $request->input('criticite');
         
            $inc->save();
         
            //flash message
            session()->flash('update','Bien Modifier');
         
            return redirect('/liste_bo_r');
         
           }
         
          public function bo_mp_destroy(Request $request,$id)
          {
            $inc = Bo_maj_replan::find($id);
         
            $inc->delete();
            
            //flash message
            session()->flash('sup','Bien Supprimer');
         
            return redirect('/liste_bo_r');
         
          }
         
          public function bo_mp_details($id)
           {
             $ic = Bo_maj_replan::find($id);
             return view ('details_bo_r',['ic'=>$ic]);
         
           }






  //analyse & extraction
           //-*analyse
  public function analyse_index(Request $request)
  {
       
             $l =DB::table('ae_analyses')->where('email_user',$request->user()->email)->get();
            
             return view('liste_analyse' , ['ic' => $listincident]);

             
             

  }

  public function analyse_create()
  {
      
  }

 public function analyse_store(Request $request)
 {
   


      $inc = new Ae_analyse();
      
    
     $inc->projet = $request->input('projet');
     $inc->typologie = $request->input('typologie');
     $inc->Descriptif = $request->input('Descriptif');

      $inc->email_user = $request->user()->email;
     
     $inc->save();
     
     session()->flash('aj','Analyse Bien Ajouter');

    return redirect('/analyse');

 }
 
 public function analyse_edit($id)
 {
   $ic = Ae_analyse::find($id);
   return view ('editer_analyse',['ic'=>$ic]);

 }
 
 public function analyse_update(Request $request,$id)
 {
  $inc = Ae_analyse::find($id);

  $inc->projet = $request->input('projet');
  $inc->typologie = $request->input('typologie');
  $inc->Descriptif = $request->input('Descriptif');

  $inc->save();

  //flash message
  session()->flash('update','Bien Modifier');

  return redirect('/liste_analyse');

 }


public function analyse_destroy(Request $request,$id)
{
  $inc = Ae_analyse::find($id);

  $inc->delete();
  
  //flash message
  session()->flash('sup','Bien Supprimer');

  return redirect('/liste_analyse');

}

public function analyse_details($id)
 {
   $ic = Ae_analyse::find($id);
   return view ('details_analyse',['ic'=>$ic]);

 }
            
 
              //-*extraction
 public function extr_index(Request $request)
 {
      
            $l =DB::table('ae_extractions')->where('email_user',$request->user()->email)->get();
           
            return view('liste_extraction' , ['ic' => $listincident]);

            
            

 }

 public function extr_create()
 {
     
 }

public function extr_store(Request $request)
{
  
     $inc = new Ae_extraction();
     
   
     $inc->Type_d = $request->input('Type_d');
    $inc->Source_d = $request->input('Source_d');
    $inc->Descriptif = $request->input('Descriptif');

     $inc->email_user = $request->user()->email;
    
    $inc->save();
    
    session()->flash('aj','Extraction Bien Ajouter');

   return redirect('/extraction');

}

public function extr_edit($id)
{
  $ic = Ae_extraction::find($id);
  return view ('editer_extraction',['ic'=>$ic]);

}

public function extr_pdate(Request $request,$id)
{
 $inc = Ae_extraction::find($id);

 $inc->Type_d = $request->input('Type_d');
 $inc->Source_d = $request->input('Source_d');
 $inc->Descriptif = $request->input('Descriptif');

 $inc->save();

 //flash message
 session()->flash('update','Bien Modifier');

 return redirect('/liste_extraction');

}


public function extr_destroy(Request $request,$id)
{
 $inc = Ae_extraction::find($id);

 $inc->delete();
 
 //flash message
 session()->flash('sup','Bien Supprimer');

 return redirect('/liste_extraction');

}

public function extr_details($id)
{
  $ic = Ae_extraction::find($id);
  return view ('details_extraction',['ic'=>$ic]);

}




}
