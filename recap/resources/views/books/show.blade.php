@extends('layouts.app')
@section('content')
<a href="{{route('books.index')}}">
    <button>Back</button>
</a>
<table>
    <thead>
    <th>Index</th>
        <th>Title</th>
        <th>Author</th>
        <th>Pages</th>
        <th>Action</th>
    
    </tr>
        
    </thead>
    <tbody>
    <tr>
           <td>{{$book->id}}</td> 
           <td>{{$book->title}}</td>
           <td>{{$book->author}}</td>
           <td>{{$book->pages}}</td>
            <td>
               <form action="{{route('books.destroy',['id'=>$book->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
               </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection