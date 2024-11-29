@extends('layouts.app')

@section('content')

<table>
    <thead>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Stories</th>
            <th>Size</th>
            <th>Cost</th>
            <th>Action</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        
        <tr>
            <td>{{$bulding->id}}</td>
            <td>{{$bulding->name}}</td>
            <td>{{$bulding->stories}}</td>
            <td>{{$bulding->size}}</td>
            <td>{{$bulding->cost}}</td>
            <td>{{$bulding->created_at}}</td>
            <td>{{$bulding->updated_at}}</td>
            <td>
               <form action="{{route('buldings.destroy',['id'=>$bulding->id])}}" method='POST'>
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
               </form>
            </td>
        </tr>
       
    </tbody>
</table>

@endsection