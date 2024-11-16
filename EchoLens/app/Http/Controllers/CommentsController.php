<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function __construct(){
       $this->middleware('auth');
    }
   public function index($post_id){
    $comments=Comments::all();
    return view('comments.index',['comments'=>$comments]);
   }

   public function show($post_id,$id){
    $comment=Comments::findOrFail($id);
    return view('comments.show',['comment'=>$comment]);
   }

   public function create($post_id){
    return view('comments.create',['post_id'=>$post_id]);
   }

   public function store($post_id){
    $comment=new Comments();

    $comment->comment=request('comment');
    $comment->post_id=request('post_id');

    $comment->author_id=Auth::id();

    $comment->save();

  return redirect()->route('comments.index',['post_id'=>$post_id]);

}
   

    public function destroy($post_id,$id){

        $comment=Comments::findOrFail($id);
        $comment->delete();
        return redirect()->route('comments.index',['post_id'=>$post_id,'id'=>$id])->with('msg','You have deleted a comment');

    }
  
}
