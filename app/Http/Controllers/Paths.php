<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Paths;

class Paths extends Controller
{
  /* admin(){

   }
   seller(){

   }

   delivery(){

   }*/

   function login(Request $request){
     $email = $request->input('email');
     $password = $request->input('password');
        $login=array(
             'admin@gmail.com',
             'client@gmail.com',
             'deliver@gmail.com'
        );

        if($email=='admin@gmail.com' && $password=='12345'){
          return view('./FrontEnd/admin',compact(
               'email','password'
          ));
        }else{
          if($email=='client@gmail.com' && $password=='12345'){
               return view('./FrontEnd/seller',compact(
                    'email','password'
               ));
             }else{
               if($email=='deliver@gmail.com' && $password=='12345'){
                    return view('./FrontEnd/deliver',compact(
                         'email','password'
                    ));
                  }
                  else{
                    return view('welcome');
                  }
             }
        }
       
   }

   
   function register(){
     return view('./FrontEnd/register');
   }

   function client(){
     return view('./BOOTSTRAP/static/index');
   }

   function commande(){
     return view('./FrontEnd/seller');
   }

  function livraison(){
     return view('./FrontEnd/livraison');
   }
}
