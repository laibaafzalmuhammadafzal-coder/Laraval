<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    //
   
 public function practice(){
        return View('practice');
    }
     public function home(){
        return View('home');
    }
    
     public function header(){
        return View('partials.header');
    }
      public function footer(){
        return View('partials.footer');
    }
        public function carmachanic(){
            return View('carmachanic');
        }
        public function babysitter(){
            return View('babysitter');
        }
        public function beautition(){
            return View('beautition');
        }
        public function cleaner(){
            return View('cleaner');
        }
        public function electrition(){
            return View('electrition');
        }
        public function plumber(){
            return View('plumber');
        }
        // public function security(){
        //     return View('security');
        // }
        public function tailor(){
            return View('tailor');
        }
        public function homeshiffting(){
            return View('homeshiffting');
        }
        // public function pestcontrol(){
        //     return View('pestcontrol');
        // }
        public function carpenter(){
            return View('carpenter');
        }
        public function cooking(){
            return View('cooking');
        }
        public function lundary(){
            return View('lundary');
        }
        public function painter(){
            return View('painter');
        }

        public function driver(){
            return View('driver');
        }
        public function services(){
            return View('services');
        }
        public function About(){
            return View('About');
        }
        public function contact(){
            return View('contact');
        }
    // public function insert(Request $data){
    //     $user=new \App\Models\signUp();
    //     $user->username=$data->input('username');
    //     $user->email=$data->input('email');
    //     $user->password=$data->input('password');
    //     $user->save();
    //     return redirect()->back();

    // }
//     public function signup(Request $request){
//     $user = new \App\Models\SignUp();
//     $user->username = $request->input('username');
//     $user->email = $request->input('email');
//     $user->password = $request->input('password'); // ideally hash karo
//     $user->save();
//     return redirect()->back()->with('success','Signup successful!');
// }

//     public function login(Request $request){
//     $email = $request->input('email');
//     $password = $request->input('password');

//     $user = \App\Models\SignUp::where('email', $email)->first();

//     if($user && $user->password == $password){
//         // login success
//         return redirect()->route('home');
//     } else {
//         // login failed
//         return redirect()->back()->with('error','Invalid credentials');
//     }
// }
// }

public function signup(Request $request){
    // create new user
    $user = new \App\Models\SignUp();
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = $request->password;  // simple password store (no null)
    $user->save();

    return redirect()->back()->with('success','Signup successful!');
}


public function login(Request $request){

    $email = $request->email;
    $password = $request->password;

    // 1. Check if email exists in database
    $user = \App\Models\SignUp::where('email', $email)->first();

    if(!$user){
        return back()->with('error','This email is not registered!');
    }

    // 2. Check password match
    if($user->password !== $password){
        return back()->with('error','Incorrect password!');
    }

    // 3. Login success
    return redirect()->route('home');
}
}