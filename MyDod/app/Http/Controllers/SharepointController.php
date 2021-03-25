<?php

namespace App\Http\Controllers;
use App\Models\Sh_droit;
use App\Models\Sh_l_droit;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;

class SharepointController extends Controller
{
    //construct of this controller
  public function __construct(){

    
    return $this->middleware('auth');

  }
   
  //Crud pour demande droit
    
    public function index(Request $request)
    {
        $listd_droit =DB::table('sh_droits')->where('email_user',$request->user()->email)->get();
              
        return view('EB.sharepoint.l_d_droit' , ['ic' => $listd_droit]);


    }

    public function create()
    {
        
    }

   public function store(Request $request)
   {
       
    $inc = new Sh_droit();
        
    
    $inc->dossier = $request->input('dossier');
    $inc->Utilisateurs = $request->input('Utilisateurs');

    $inc->email_user = $request->user()->email;
    
    $inc->save();
    
    session()->flash('aj','Bien Ajouter');

   return redirect('/l_d_droit');
     

   }

   public function edit($id)
   {
     $ic = Sh_droit::find($id);
     return view ('EB.sharepoint.editer_l_d_droit',['inc'=>$ic]);

   }

   public function update(Request $request,$id){
   
    $inc = Sh_droit::find($id);
      
      if(auth()->user()->etat=='user'){
         
          $inc->dossier = $request->input('dossier');
          $inc->Utilisateurs = $request->input('Utilisateurs');
          $inc->save();

           //flash message
          session()->flash('update','Bien Modifier');

          return redirect('/l_d_droit');
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


  public function destroy(Request $request,$id)
  {
    $inc = Sh_droit::find($id);

    $inc->delete();
    
    //flash message
    session()->flash('sup','Bien Supprimer');

    return redirect('/l_d_droit');
  }

  public function details($id)
   {
     $ic = Sh_droit::find($id);
     return view ('EB.sharepoint.details_l_d_droit',['inc'=>$ic]);

   }

  //crud pour liste creation de la demande

  public function c_index(Request $request)
  {

       
        $listd_droit =DB::table('sh_l_droits')->where('email_user',$request->user()->email)->get();
              
        return view('EB.sharepoint.ll_d_droit' , ['ic' => $listd_droit]);
  }

  public function c_create()
  {
      
  }

 public function c_store(Request $request)
 {
     $inc = new Sh_l_droit();
            
      $inc->email_user = $request->user()->email;
      $inc->nom_l = $request->input('nom_l');
      $inc->utilisateur = $request->input('utilisateur');

      if($request->hasfile('pj'))
      {
        $inc->PJ= $request->pj->store('PJ_sharepoint');
      }
      
 

      
      $inc->save();
      
      session()->flash('aj','Bien Ajouter');

    return redirect('/ll_d_droit');

    

 }
 
 public function c_edit($id)
 {
  
  $ic = Sh_l_droit::find($id);
  return view ('EB.sharepoint.editer_ll_d_droit',['inc'=>$ic]);

 }
 

   public function c_update(Request $request,$id)
   {
    $inc = Sh_l_droit::find($id);
    if(auth()->user()->etat=='user'){
         
    
      $inc->nom_l = $request->input('nom_l');
      $inc->utilisateur = $request->input('utilisateur');
      
          $inc->save();

           //flash message
          session()->flash('update','Bien Modifier');

          return redirect('/ll_d_droit');
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
public function c_destroy(Request $request,$id)
{
  $inc = Sh_l_droit::find($id);

    $inc->delete();
    
    //flash message
    session()->flash('sup','Bien Supprimer');

    return redirect('/ll_d_droit');
}


public function c_details($id)
{
  $ic = Sh_l_droit::find($id);
  return view ('EB.sharepoint.details_ll_d_droit',['inc'=>$ic]);

}

}

