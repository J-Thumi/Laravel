<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $posts=Posts::all();
        return view('posts.index',['posts'=>$posts]);
       }
    
       public function show($id){

        $post=Posts::findOrFail($id);

        return view('posts.show',['post'=>$post]);
       
        
       }
    
       public function create(){
        return view('posts.create');
       }
    
       public function store(){
        $post=new Posts();

        $post->post=request('post');
        $post->title=request("title");
        $post->category=request("category");

        $post->author_id=Auth::id();
    
        $post->save();
        
      return redirect()->route('posts.index')->with('msg','Post Saved');
    
    }
       
    
        public function destroy($id){
    
            $post=Posts::findOrFail($id);
            $post->delete();
        return redirect()->route('posts.index');
        }
}
