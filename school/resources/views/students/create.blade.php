@extends('layouts.app')
@section('content')
<form action="{{route('students.store')}}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name='name'>

    <label for="regno">Regno</label>
    <input type="text" name='regno'>

    <label for="marks">Marks</label>
    <input type="text" name='marks'>

    <fieldset>
        <label for="units">Units</label><br>
        <input type="checkbox" name='units[]' value='Physics'>Physics <br>
        <input type="checkbox" name='units[]' value='Chemistry'>Chemistry <br>
        <input type="checkbox" name='units[]' value='Mathematics'>Mathematics <br>
        <input type="checkbox" name='units[]' value='Organisational'>Organisational <br>
        <input type="checkbox" name='units[]' value='English'>English <br>
    </fieldset>
    <input type="submit" value='create'>
</form>
@endsection