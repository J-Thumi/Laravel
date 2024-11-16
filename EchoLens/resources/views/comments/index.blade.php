@extends('layouts.app')

@section('content')

<table>
    <thead>
        <tr>
        <th>Index</th>
        <th>Posted By</th>
        <th>Post Id</th>
        <th>Commented At</th>
        <th>Comment</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comments as $comment)
        <tr>
            <td>{{$comment['id']}}</td>
            <td>{{$comment['author_id']}}</td>
            <td>{{$comment['post_id']}}</td>
            <td>{{$comment['created_at']}}</td>
            <td>{{$comment['comment']}}</td>
            <td>
                <a href="{{route('comments.destroy',['post_id'=>$comment['post_id'],'id'=>$comment['id']])}}">
            <button type="submit" onclick="return confirm('Are you sure you want to delete this comment?')">Delete</button>
            </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<strong><p>{{session('msg')}}</p></strong>

@endsection