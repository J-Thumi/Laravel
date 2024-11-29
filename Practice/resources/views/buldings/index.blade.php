@extends('layouts.app')

@section('content')

<a href="{{route('buldings.create')}}">
    <button>Create</button>
</a>
<br><br>
<table>
    <thead>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Stories</th>
            <th>Size</th>
            <th>Cost</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($buldings as $bulding)
        <tr>
            <td>{{$bulding->id}}</td>
            <td>{{$bulding->name}}</td>
            <td>{{$bulding->stories}}</td>
            <td>{{$bulding->size}}</td>
            <td>{{$bulding->cost}}</td>
            <td>
               <a href="{{route('buldings.show',['id'=>$bulding->id])}}">
                <button>Show</button>
               </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<h5>{{session('msg')}}</h5>

@endsection