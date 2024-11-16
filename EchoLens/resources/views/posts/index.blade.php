@extends('layouts.app')

@section('content')
<table>
    <thead>
        <tr>
            <th>Index</th>
            <th>Title</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$loop->index}}</td>
            <td>{{$post['title']}}</td>
            <td>{{$post['category']}}</td>
            <td>
                <button><a href="{{route('posts.show',['id'=>$post['id']])}}">show</a></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection