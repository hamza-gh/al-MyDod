<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Ae_analyse;
use App\Models\User;
class CompteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function dec(){
        auth()->logout();

        return redirect('/login');
    }
    public function con(request $r)
    {
    
        if($r->user()->email!=null)
        {
            return redirect('/home');
        }
       
    }

    public function auth(request $request)
    {
        
        $inc = new User();
           
        $inc->name = $request->input('name');

        $inc->email = $request->input('email');
        
        $inc->password = $request->input('password');

        $inc->etat = $request->input('etat');
    
        
        
        $inc->save();
        session()->flash('update','Bien Ajouter');
        
 
       return redirect('/home');

    }

   

       
}
    
    


