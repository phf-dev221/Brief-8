<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
      
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

            if(Auth::guard('association')->attempt(['email'=>$request->email, 'password'=>$request->password])){
                // $user = Auth::guard('association')->user();
              

                return redirect('/dashboard');
            }
            if (Auth::guard('web')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
                 
                // $user = Auth::guard('web')->user();
                return redirect('/');
            }
            
               return  redirect('/');
        
          
            

            // $user = auth()->user();
            
            // dd($user->role);

        //     if ($user->role === 'admin') {
        //         return 'bonjour';

        //     } else if($user->role === 'user') {
        //         return 'user';

        //     }

        // }
        
        // return back()->withErrors('email et/ou mot de passe incorrect !!!!');
        
    }

    // public function authenticate()
    // {
    //     if (Auth::guard('web')->check()) {
    //         // Utilisateur authentifié
    //         return 'user';
    //     } elseif (Auth::guard('association')->check()) {
    //         // Association authentifiée
    //         return 'admin';
    //     } else {
    //         // Ni utilisateur ni association authentifié
    //         return back(); // ou une autre redirection par défaut
    //     }
    // }
}
