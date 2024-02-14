<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function first(){


    //     return view("first");
    // }
    // // public function signup(){
    // //     return view("signup");
    // // }
    // public function login(){
    //     return view("login");
    // }
    // public function success(){
    //     return view("success");
    // }
    // public function welcome(){
        //passing data to views using compact method
        // $name="haris";
        // $email="harisnaseer@gmail.com";
        // $age=29;

        // return view("welcome",compact(["name","email","age"]));

//         //passing data to views using with associative array
//         $data=[
// "name"=>"Sir Haris",
// "email"=>"haris@gmail.com",
// "age"=>25,
//         ];
     

//         return view("welcome",$data);

        //passing data to views using with "with" method
        // $name="ABC";
        // $email="abc@gmail.com";
        // $age=55;

        // return view("welcome")
        // ->with("name",$name)
        // ->with("email",$email)
        // ->with("age",$age);
    // }
    // public function logout(){
    //     return view("
    //     bye");
    // }
//     public function register(){
//         return view("register");
//     }
//     public function signup(Request $request){
//         $request->validate([
//             "username"=>"required",
//             "email"=>"required | email",
//             "password"=>"required",


//        ] );

// // dd(
// //     $request

// // );
// $data=compact('register');

// dd($data);
//         return view("register")->with($data);
//     }
}
