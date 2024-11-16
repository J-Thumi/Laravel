@extends('layouts.app')

@section('content')

<form action="{{route('comments.store',['post_id'=>$post_id])}}" method='POST'>
    @csrf
    <label for="comment">comment</label><br><br>
    <input type="text" name="comment"><br><br>

    <input type="submit" value="comment">
</form>

@endsection