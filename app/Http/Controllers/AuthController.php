<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    //
    public function schoolLogin(Request $request){
          $email = $request->email;
          $password=$request->password;
          $user = User::where([["email",$email],["userType",1]])->first();
          if($user){
              
              if(Hash::check($password,$user->password)){
                 $request->session()->put("user",$email);
                 return redirect()->route("school.dashboard");
              }
              else{
                  echo "not password good";
              }
          }
          else{
              echo "email is not exist";
          }
    }
    public function schoolLogout(Request $request){
        $request->session()->forget("user");
        return redirect()->route("school.login");
    }
}
