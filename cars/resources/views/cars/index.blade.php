<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cars</title>
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
    <a href="/cars/create">create</a>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
    
<br/><br/>
<table>   
            <thead>
                
                <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Horsepower</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{$loop->index+1}}</td>
                
                    <td>{{$car->name}}</td>
                    <td>{{$car['model']}}</td>
                    <td>{{$car['year']}}</td>
                    <td>{{$car['horsepower']}}</td>
                    @endforeach
                </tr>
    </tbody>
    </table>
           
        </div>
        
    </div>
</div>

</body>
</html>