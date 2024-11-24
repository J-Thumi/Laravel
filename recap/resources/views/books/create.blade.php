@extends('layouts.app')
@section('content')
<a href="{{route('books.index')}}">
    <button>Back</button>
</a>
<form action="{{route('books.store')}}" method="POST">
    @csrf

    <label for="title">Title</label>
    <input type="text" name="title">
    <label for="author">Author</label>
    <input type="text" name="author">
    <label for="pages">Pages</label>
    <input type="text" name="pages">
    <input type="submit" value="Submit">


</form>
@endsection