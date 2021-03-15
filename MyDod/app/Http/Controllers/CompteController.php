<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    
   

}