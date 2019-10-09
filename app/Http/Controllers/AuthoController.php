<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class AuthoController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function loginstore(Request $request){
    	$email = $request -> email;
    	$password = $request -> password;

    	$obj = Employee::where('email','=',$email)
    					->where('password','=',md5($password))
    		    		->first();

    	if($obj){
    		echo 'Login Successful';
    	}
    	else{
    		return redirect()->back()->with('msg','Invalid email or password');
   		//echo 'Invalid email or password';
    	}				
    }
}
