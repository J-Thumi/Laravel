@extends('layouts.app')

@section('content')
<button class='createbtn'><a href="/students/create">create</a></button>
    

    <table>
        <thead>
            <tr>
                <th>Index</th>
                <th>Name</th>
            <th>Registration Number</th>
            <th>GPA</th>
            <th>Units</th>
            <th>Actions</th></tr>
            
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$student['name']}}</td>
                <td>{{$student['regno']}}</td>
                <td>{{$student['gpa']}}</td>
                
                @php
                $units=json_decode($student['units'],true);
                @endphp
                
                <td>
                <ol>
                @foreach($units as $unit)
                    <li>{{$unit}}</li>
                    @endforeach
                </ol>    
                </td>
                <td>
                <button><a href="/students/{{$student['id']}}">Show</a></button>
               </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p><strong>{{session('msg')}}</strong></p>
   
@endsection