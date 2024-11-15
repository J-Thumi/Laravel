@extends('layouts.app')

@section('content')
   <div class='form'><form action="/students" method='POST' id='form'>
        @csrf
        <label for="name">Name</label>
        <input type="text" name='name'>

        <label for="regno">Reg No</label>
        <input type="text" name='regno'>

        <label for="gpa">GPA</label>
        <input type="text" name='gpa'>

        <fieldset>

            <label >Units</label>
            <br>
                <input type="checkbox" name='units[]' value='Chemistry'>Chemistry <br>
                <input type="checkbox" name='units[]' value='Biology'>Biology<br>
                <input type="checkbox" name='units[]' value='Physics'>Physics<br>
                <input type="checkbox" name='units[]' value='Mathematics'>Mathematics<br>
                <input type="checkbox" name='units[]' value='English'>English<br>

        </fieldset>
        <input type="submit" value='Create'>
    </form>
    </div> 
    <table>
        <thead>
            <tr> <th>mnhh</th></tr>
           
        </thead>
        <tbody>
            <tr> <td>hjj</td></tr>
           
        </tbody>
    </table>
    @endsection