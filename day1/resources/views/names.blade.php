<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Names</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
        <table>
            
        <thead>
            
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Comments</th>
            </tr>
        </thead>
        @foreach($perso as $person)
        <tbody>
       
            <tr>
            
                <td>{{$person['name']}}</td>
                <td>{{$person['age']}}</td>
                <td>{{$person['email']}}</td>
                
                @if( $person['age'] < 30)
      
                {{$comment="You are still young"}}

                @else
                {{$comment="You are old"}}

                 @endif

                 <td>{{$comment}}</td>
                @endforeach
            </tr>
</tbody>
</table>
            
        </div>
        
    </div>
</div>
</body>
</html>