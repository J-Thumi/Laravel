@extends('layouts.app')
@section('content')
<a href="{{route('students.create')}}">create</a>
<table>
    <thead><tr>
        <th>ID</th>
        <th>Name</th>
        <th>Regno</th>
        <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$student['id']}}</td>
            <td>{{$student['name']}}</td>
            <td>{{$student['regno']}}</td>
            <td>
                <button>
                <a href="{{route('students.show',['id'=>$student['id']])}}">show</a>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection