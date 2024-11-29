@extends('layouts.app')

@section('content')
<form action="{{route('buldings.store')}}" method='POST'>
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name">

    <label for="stories">Stories</label>
    <input type="text" name="stories">

    <label for="cost">Cost</label>
    <input type="text" name="cost">

    <label for="size">Size</label>
    <input type="text" name="size">

    <input type="submit" value="Submit">
</form>
@endsection