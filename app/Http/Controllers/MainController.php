<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    
    public function index(){

        return view('login.login');

    }

    function checkLogin(Request $request){

        // $this->validate($request,[
        //     'email' => 'required, email',
        //     'password' => 'required, alhpa_num, min:3'
        // ]);

        $userData = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($userData)){

            return redirect('/admDashBoard');
        
        }else{

            return back()->with('error', 'Wrong Login Details');

        }
    }

    function successLogin(){
        return view('/admDashBoard');
    }

    function logout(){

        Auth::logout();
        return redirect('/login');
    }

}
