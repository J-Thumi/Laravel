<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    public function index(){
        $cars = Cars::all();
        // $cars=Cars::orderBy('name')->get();
        // $cars=Cars::orderBy('horsepower','desc')->get();
        // $cars=Cars::latest()->get();
        // $cars=Cars::where('year','2019')->get();
        return view('cars.index',['cars'=>$cars]);
    }

   public function home() {
        return view('welcome');
    }

    public function show($id){

        $car=Cars::findOrFail($id);

        return view('cars.show',['car'=>$car]);
    }
    public function create(){
        return view('cars.create');
    }

    public function store(Request $request){
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'model' => 'required|string|max:255',
        //     'year' => 'required|integer',
        // ]);

        // Create a new Car record in the database
        // Cars::create($validatedData);


        $car=new Cars();
        $car->name=request('name');
        $car->model=request('model');
        $car->year=request('year');
        $car->horsepower=request('horsepower');

        $car->save();
        return redirect('/cars');
    }
}
