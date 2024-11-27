<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;  // Import the Hash facade


class UserController extends Controller
{
   public function Register(Request $req)
   {
     $user=new User();
     $user->name=$req->input('name');
     $user->email=$req->input('email');
     $user->password=Hash::make($req->input('password'));
     $user->save();
     return $user;
   }
    
//    public function Register(Request $req)
//    {
//        $name = $req->input('name');
//        $email = $req->input('email');
       
//        return response()->json(['name' => $name, 'email' => $email]);
//    }
}
