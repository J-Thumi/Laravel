@extends('layouts.app')

@section('content')
<h1>{{$post['category']}}</h1>
<h1>{{$post['title']}}</h1><br><br>
<p>{{$post['post']}}</p>
<h1>Created at :</h1><p>{{$post['created_at']}}</p>
<h1>Author :</h1><p>{{$post['author_id']}}</p>


<a href="{{route('comments.index',['post_id'=>$post['id']])}}">See comments</a>
<br>
<a href="{{route('comments.create',['post_id'=>$post['id']])}}">Add a comment</a>

<form action="{{route('posts.destroy',['id'=>$post['id']])}}" method='POST'>
    @csrf
    @method('DELETE')
    
<button type="submit"  onclick="return confirm('Are you sure you want to delete the post')">Delete</button> 

</form>
@endsection