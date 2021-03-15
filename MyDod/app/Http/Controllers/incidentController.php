<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Incident;
use Illuminate\Foundation\Auth\VerifiesEmails;

class incidentController extends Controller
{

  //construct of this controller
  public function __construct(){

    
    return $this->middleware('auth');

  }
   
    
    public function index(Request $request)
    {
         
               $listincident =DB::table('incidents')->where('email_user',$request->user()->email)->get();
              
               return view('liste_incident' , ['ic' => $listincident]);

               
               

    }

    public function create()
    {
        
    }

   public function store(Request $request)
   {
     


        $inc = new Incident();
        
       $inc->email_user = $request->user()->email;
       $inc->objet = $request->input('objet');
       $inc->Description = $request->input('Description');
       $inc->criticité = $request->input('criticite');
       
       
       $inc->save();
       
       session()->flash('aj','Bien Ajouter');

      return redirect('/liste_incident');

   }
   
   public function edit($id)
   {
     $ic = incident::find($id);
     return view ('editer_incident',['ic'=>$ic]);

   }
   
   public function update(Request $request,$id)
   {
    $inc = incident::find($id);

    $inc->objet = $request->input('objet');
    $inc->Description = $request->input('Description');
    $inc->criticité = $request->input('criticite');

    $inc->save();

    //flash message
    session()->flash('update','Bien Modifier');

    return redirect('/liste_incident');

   }
  public function destroy(Request $request,$id)
  {
    $inc = incident::find($id);

    $inc->delete();
    
    //flash message
    session()->flash('sup','Bien Supprimer');

    return redirect('/liste_incident');

  }

  public function details($id)
   {
     $ic = incident::find($id);
     return view ('details_incident',['ic'=>$ic]);

   }
}