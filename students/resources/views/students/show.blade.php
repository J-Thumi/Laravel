@extends('layouts.app')
@section('content')
<p>Welome {{$student['name']}} your GPA is {{$student['gpa']}}</p>

<form action="/students/{{$student->id}}" method='POST'>
    @csrf
    @method('DELETE')
    <input type="submit" value='Delete'>
</form>
@endsection