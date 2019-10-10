<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Session;
class AuthoController extends Controller
{
    public function login(){
       if(Session::has('userid')){//when session find userid(matched with db) then....
            return redirect()->to('dashboard');//when execution happening then the this logout redirect to dashboard
        }
    	return view('login');
    }


    public function loginstore(Request $request){
    	$email = $request -> email;
    	$password = $request -> password;

    	$obj = Employee::where('email','=',$email)
    					->where('password','=',md5($password))
    		    		->first();

    	if($obj){
    		Session::put('userid',$obj->id);
            Session::put('username',$obj->name);
            Session::put('userrole',$obj->role);

            return redirect()->to('dashboard');
            //echo 'Login Successful';
    	}
    	else{
    		return redirect()->back()->with('msg','Invalid email or password');
   		//echo 'Invalid email or password';
    	}				
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function logout(){
        Session::flush();//whatever was displaying all will be deleted
        return redirect()->to('login');//when execution happening then the this logout redirect to login
    }

    public function teacher1(){
        return view('dashboard');
    }

    public function teacher2(){
        return view('dashboard');
    }

    public function student1(){
        return view('dashboard');
    }

    public function student2(){
        return view('dashboard');
    }

}
