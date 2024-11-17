@extends('layouts.app')

@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>RegNo</th>
            <th>Date Joined</th>
            <th>Marks</th>
            <th>Units</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->regno }}</td>
            <td>{{ $student->created_at }}</td>
            <td>{{ $student->marks }}</td>
            <td>
                <ol>
                    @php
                        $units = json_decode($student->units);
                    @endphp
                    @foreach($units as $unit)
                        <li>{{ $unit }}</li>
                    @endforeach
                </ol>
            </td>
            <td>
            <form action="{{route('students.destroy',['id'=>$student->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="DELETE">
            </form>
            </td>
        </tr>
        @else
        <tr>
            <td colspan="6">No student found.</td>
        </tr>
        @endif
    </tbody>
</table>

@endsection
