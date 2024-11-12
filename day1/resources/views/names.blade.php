<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Names</title>
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
        <table>
            
        <thead>
            
            <tr>
                <th>Index</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Comments</th>
                <th>Position</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($persons as $person)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$person['name']}}</td>
                <td>{{$person['age']}}</td>
                <td>{{$person['email']}}</td>
                
                @if( $person['age'] < 30)
                {{$comment="You are still young"}}
                <td>{{$comment}}</td>
                
                @elseif( $person['age'] > 30)
                {{$comment="You are old"}}
                <td>{{$comment}}</td>

                @else
                {{$comment="You are 30"}}
                <td>{{$comment}}</td>

                 @endif

                @if($loop->first)
                    {{$position="This is the first person"}}
                    <td>{{$position}}</td>
                @endif

                @if($loop->last)
                    {{$position="This is the last person"}}
                    <td>{{$position}}</td>
                @endif

                @unless($loop->first || $loop->last)
                    {{$position="This is not the first person"}}
                    <td>{{$position}}</td>
                @endunless

                @endforeach
            </tr>
</tbody>
</table>

<!-- unless is the oposite of if 
 the code is executed if the statement is false -->
<br/><br/>
<table>   
            <thead>
                
                <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Comments</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($persons as $person)
                <tr>
                    <td>{{$loop->index+1}}</td>
                
                    <td>{{$person['name']}}</td>
                    <td>{{$person['age']}}</td>
                    <td>{{$person['email']}}</td>
                    
                    @unless($person['age']==30)
                    {{$comment="You are not 30"}}
                    <td>{{$comment}}</td>
    
                     @endunless
    
                    @endforeach
                </tr>
    </tbody>
    </table>
            <!--you can also write vanilla php 
            @php

            @endphp
              -->
            @php
            $name='shawn';
            echo($name);
            @endphp
        </div>
        
    </div>
</div>
<img src="/images/stunning.png" alt="hello">
</body>
</html>