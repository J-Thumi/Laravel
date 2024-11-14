<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <button><a href="/workers/create">create</a></button>
    

<table>
    <thead>
        <tr>
        <th>Index</th>
        <th>Name</th>
        <th>Age</th>
        <th>Wage</th>
        <th>Rank</th>
        <th>Tasks</th>
    </tr>
        
    </thead>
<tbody>
    @foreach($workers as $worker)
    <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$worker['name']}}</td>
        <td>{{$worker['age']}}</td>
        <td>{{$worker['wage']}}</td>
        <td>{{$worker['rank']}}</td>

        @php
        $tasks=json_decode($worker['tasks'],true)
        @endphp

        <td>
        <ul>
        @foreach($tasks as $task)
        
            <li>{{$task}}</li>

        @endforeach
        </ul>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
<p>{{session('message')}}</p>
</body>
</html>