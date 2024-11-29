<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buldings;

class BuldingsController extends Controller
{
    public function index(){
        $buldings=Buldings::all();

        return view('buldings.index',['buldings'=>$buldings]);
    }
    public function show($id){
        $bulding=Buldings::findOrFail($id);

        return view('buldings.show',['bulding'=>$bulding]);
    }
    public function create(){

        return view('buldings.create');
    }
    public function destroy($id){
        $bulding=Buldings::findOrFail($id);
        $bulding->delete();
        return redirect()->route('buldings.index')->with('msg','A bulding Collapsed');
    }
    public function store(){
        $bulding=new Buldings();
        $bulding->name=request('name');
        $bulding->stories=request('stories');
        $bulding->cost=request('cost');
        $bulding->size=request('size');

        $bulding->save();

        return redirect()->route('buldings.index')->with('msg','A bulding was built');

    }
}
