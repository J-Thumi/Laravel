<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\students;
class StudentsController extends Controller
{
    public function index(){
        $students=students::all();
        return view('students.index',['students'=>$students]);
    }
    public function show($id) {
        $student = students::findOrFail($id);
    
        return view('students.show', ['student' => $student]);
    }
    
    
    public function destroy($id){
        $student=students::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('msg','You have deleted a student');
    }

    public function create(){
      return view('students.create');  
    }

    public function store(){
        $students=new students();
        $students->name=request('name');
        $students->regno=request('regno');
        $students->marks=request('marks');

        $students->units=json_encode(request('units'));

        $students->save();

        return redirect()->route('students.index')->with('msg','You added a new student');
    }
}
