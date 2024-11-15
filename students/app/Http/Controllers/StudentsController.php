<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
   //to protect all routes in the site
   public function __construct(){
      $this->middleware('auth');
   }
   public function index(){
    $students=Students::all();
    return view('students.index',['students'=>$students]);
   }

   public function create(){
    return view('students.create');
   }

   public function store(){

    $students=new Students();

    $students->name=request('name');
    $students->regno=request("regno");
    $students->gpa=request('gpa');
    $students->units=json_encode(request('units'));

    $students->save();
    return redirect('/students')->with('msg','Student created successfully');
   }
   public function show($id){
     $student=Students::findOrFail($id);
     return view('students.show',['student'=>$student]);
   }

   public function destroy($id){
      $student=Students::findOrFail($id);
      $student->delete();
      return redirect('/students')->with('msg','A student Graduated');
   }

}
