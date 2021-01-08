<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class SigninController extends Controller
{
    public function signin(){
    	return view('Signin');
    }

    public function insert(Request $request){
    	$obj=new User;
   	    $obj->fname=$request->fname;
        $obj->email=$request->email;
        $obj->pnumber=$request->pnumber;
        $obj->password=bcrypt($request->password);
     
        $obj->save();
        Auth::login($obj);
        return redirect('/');
    }

        public function authenticate(Request $request)
    {
        
        $credentials = $request->only('email', 'password');

        if (Auth::user($credentials)) {
            // Authentication passed...
            return redirect('');
        }
        
        
           
    }


     public function loginuser(Request $request)
    {
       
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // The user is being remembered...
            return redirect('/');
        }
        // return redirect('/');
    }





    public function switchoff(){
       /* dd($requst->all());
        return $request;*/

        Auth::logout();

        return redirect('/');
    }
}
