<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function login(Request $request){
        $credentials = request()-> only('email', 'password');

        if (Auth::attempt ($credentials)){
            $request()-> session()-> regenerate();
     
            return  redirect() -> intended('Producto/create'); 
            
        }
        
        return redirect('login');
    
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate(); 
        $request -> session()->regenerateToken();
        return redirect('/login');
    }
}
