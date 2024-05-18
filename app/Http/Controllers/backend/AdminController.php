<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\User;
use Session;

class AdminController  extends Controller
{
   public function index()
   {
      return view('backend.users.login');
   }
   
   function login(Request $request){
    
      $getUser = User::where('email',$request->email)->where('user_type','=','admin')->first();    
    
      if(!empty($getUser)){
          if(Hash::check($request->password,$getUser->password)){
            
              return redirect('admin/dashboard')->with('success','user login Successfully');
          }
          else { 
              return redirect('admin')->with('error','your password dos`t match');
          }

      }
      else { 
          return redirect('admin')->with('error','wrong email id');
      }

  }
  
  function dashboard(Request $request){
      return view('backend.users.dashboard');
  }
  function logout(Request $request){
      $request->session()->forget('loginUser');
      return redirect('/')->with('success','logout user');
  }

}



       

