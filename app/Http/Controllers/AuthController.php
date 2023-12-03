<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
                 
                $user = Auth::guard('web')->user();
                Session::put('user',$user);
                
                // $reservedEventIds = Reservation::where('user_id', $user->id)->where('event_id',$id);

                // if($reservedEventIds){
                //     return redirect('/index_user');
                // }
        
                return redirect("/create_reservation/$user->id");
            }
            
               return  redirect('/');
}

public function logout(){
    $events = Event::all();
    auth()->logout();
    return redirect('/');
}

}