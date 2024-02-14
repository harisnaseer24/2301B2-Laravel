<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

//Elequoent ORM (Query Builder)

class StudentController extends Controller
{    public function register(){
        return view("register");
    }
    public function signup(Request $request){
        $request->validate([
            "username"=>"required",
            "email"=>"required | email",
            "contact"=>"required",
            "image"=>"required |mimes:jpeg,jpg,png",
       ] );

$imageName=time().".".$request->image->extension();
$request->image->move(public_path("/student_uploads"), $imageName );
// dd($imageName);
       $student_data= new Student();
       $student_data->username=$request->username;
       $student_data->email=$request->email;
       $student_data->contact=$request->contact;
       $student_data->image=$imageName;
       $student_data->save();
       
       return back()->withSuccess("Success");
       
    }
    public function getStudents(){
        return view("studentlist", ["students"=>Student::get()]);
    }
    public function deleteStudent($id){
        Student::destroy($id);
        return back()->withSuccess("Deleted");
    }
    public function editStudent($id){
      
      return view("editStudent",["student"=> Student::find($id)]) ;
    }
    public function updateStudent(Request $request,$id){
        $request->validate([
            "username"=>"required",
            "email"=>"required | email",
            "contact"=>"required",
            "image"=>"required |mimes:jpeg,jpg,png",
       ] );

$imageName=time().".".$request->image->extension();
$request->image->move(public_path("/student_uploads"), $imageName );
// dd($imageName);
       $student_data= Student::find($id);
       $student_data->username=$request->username;
       $student_data->email=$request->email;
       $student_data->contact=$request->contact;
       $student_data->image=$imageName;
       $student_data->save();
       return back()->withSuccess("Updated");
    }
}
 