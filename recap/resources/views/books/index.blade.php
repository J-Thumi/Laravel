@extends('layouts.app')
@section('content')
<a href="{{route('books.create')}}">
    <button>Create</button>
</a>
<table>
    <thead><tr>
        <th>Index</th>
        <th>Title</th>
        <th>Author</th>
        <th>Pages</th>
    <th>Action</th></tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
           <td>{{$loop->index+1}}</td> 
           <td>{{$book->title}}</td>
           <td>{{$book->author}}</td>
           <td>{{$book->pages}}</td>
           <td>
            <a href="{{route('books.show',['id'=>$book->id])}}">
                <button>Show</button>
            </a>
           </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection