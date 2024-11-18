@extends('layouts.app')
@section('content')
    <form action="/workers" method='POST'>
        @csrf
        <div class="input">

            <div class="label">
        <label for="name">Name:</label>
        <input type="text" name="name">
        </div>

        <div class="label">
        <label for="age">Age:</label>
        <input type="text" name="age">
        </div>

        <div class="label">
        <label for="wage">Wage:</label>
        <input type="text" name="wage">
        </div>

        <div class="label">
        <label for="rank">Rank:</label>
        <input type="text"name="rank">
        </div>
        </div>
        <fieldset>
            <label >Tasks:</label><br>
            <input type="checkbox" name="tasks[]" value="Collect Tax">Collect Tax <br>
            <input type="checkbox" name="tasks[]" value="Photocopy">Photocopy<br>
            <input type="checkbox" name="tasks[]" value="Connect">Connect<br>
            <input type="checkbox" name="tasks[]" value="Sleep">Sleep <br>
            <input type="checkbox" name="tasks[]" value="Fly">Fly <br>
            <input type="checkbox" name="tasks[]" value="Speed">Speed <br>
        </fieldset>
        <input type="submit" class="btn">
    </form>
@endsection