<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Worker;

class WorkersController extends Controller
{
    public function index(){
        $workers=Worker::all();
        return view('workers.index' ,['workers'=>$workers]);
    }

    public function create(){

        return view('workers.create');
    }

    public function store(){

        $worker=new Worker();

        $worker->name=request('name');
        $worker->age=request('age');
        $worker->wage=request('wage');
        $worker->rank=request('rank');
        
        $worker->tasks=json_encode(request('tasks'));

      

        $worker->save();

        return redirect('/workers')->with('message','Thank you you created a new worker');
    }
}
