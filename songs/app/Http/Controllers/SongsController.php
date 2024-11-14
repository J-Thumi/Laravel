<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Songs;

class SongsController extends Controller
{
    public function show(){
        $songs=Songs::all();
        return view('songs',['songs'=>$songs]);
    }
}
