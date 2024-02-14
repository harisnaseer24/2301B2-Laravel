<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', [UserController::class,"first"]);

// using group function and controller
// Route::controller(UserController::class)->group(function(){
//     Route::get("/logout","logout");
//     Route::get("/signup","signup");
//     Route::get("/login","login");
//     Route::get("/success","success");

//     // parameterized route
//     // Route::get("/welcome/{name}","welcome");

//     //optional parameterized route
//     Route::get("/welcome/{name?}","welcome");
//     // Route::get("logout","logout");
// });

// Route::get('/logout', [UserController::class,"logout"]);

// Route::get('/signup', function () {
//     return view('signup');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/success', function () {
//     return view('success');
// });
// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/logout', function () {
//     return view('first');
// });


//Named Routes
// Route::get('/contact', function () {
//     return view('contact');
// })->name("contact");

Route::get('/register',[StudentController::class,'register']);

Route::get('/students',[StudentController::class,'getStudents']);

Route::get('/deletestudent/{id}',[StudentController::class,'deleteStudent']);

Route::get('/editstudent/{id}',[StudentController::class,'editStudent']);

Route::post('/editstudent/{id}',[StudentController::class,'updateStudent']);


Route::post('/signup',[StudentController::class,'signup']);