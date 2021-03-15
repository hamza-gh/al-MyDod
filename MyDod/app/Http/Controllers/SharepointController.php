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
        
    $inc->email_user = $request->user()->email;
    $inc->Description = $request->input('Description');
 
    
    $inc->save();
    
    session()->flash('aj','Bien Ajouter');

   return redirect('/l_d_droit');
     

   }
   
  public function destroy(Request $request,$id)
  {
    $inc = Sh_droit::find($id);

    $inc->delete();
    
    //flash message
    session()->flash('sup','Bien Supprimer');

    return redirect('/l_d_droit');
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
      $inc->objet = $request->input('objet');
      $inc->Description = $request->input('Description');

      if($request->hasfile('pj'))
      {
        $inc->PJ= $request->pj->store('PJ');
      }
      
 

      
      $inc->save();
      
      session()->flash('aj','Bien Ajouter');

    return redirect('/ll_d_droit');

    

 }
 
 public function c_edit($id)
 {
   

 }
 
 public function c_update(Request $request,$id)
 {
  
 }
public function c_destroy(Request $request,$id)
{
  $inc = Sh_l_droit::find($id);

    $inc->delete();
    
    //flash message
    session()->flash('sup','Bien Supprimer');

    return redirect('/ll_d_droit');
}



}

