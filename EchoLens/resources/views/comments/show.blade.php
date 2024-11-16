@extends('layouts.app')

@section('content')

            <h1>ID:</h1> <p>{{$comment['id']}}</p>
            <h1>Author ID</h1><p>{{$comment['author_id']}}</p>
            <h1>Post ID</h1><p>{{$comment['post_id']}}</p>
            <h1>Created At</h1><p>{{$comment['created_at']}}</p>
            <h1>Comment</h1><p>{{$comment['comment']}}</p>


            <form action="{{route('comments.destroy',['post_id'=>$comment['post_id'],'id'=>$comment['id']])}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" onclick="return confirm('Are you sure you want to delete this comment?')">Delete</button>
            </form>
           
@endsection