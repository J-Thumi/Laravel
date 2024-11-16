@extends('layouts.app')

@section('content')
<form action="{{route('posts.store')}}" method="POST">
   @csrf
    <label for="title">Title: </label>
    <input type="text" name="title">
<br><br><br>
    <label for="category">Category:</label>
    <input type="text" name="category">
<br><br><br>
    <label for="post">Blog:</label>
    <input type="text" name="post">
<br><br><br>
    <input type="submit" value="Publish">
</form>
@endsection