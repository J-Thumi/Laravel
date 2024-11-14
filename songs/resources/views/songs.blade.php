<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Index</th>
                <th>Title</th>
                <th>Artist</th>
                <th>Genre</th>
                <th>Length</th>
                <th>Play</th>
            </tr>
        </thead>
        <tbody>
        @foreach($songs as $song)
            <tr>
               
                <td>{{$loop->index+1}}</td>
                    <td>{{$song['title']}}</td>
                    <td>{{$song['artist']}}</td>
                    <td>{{$song['genre']}}</td>
                    <td>{{$song['length']}}</td>
                    <td> <audio controls>
  <source src="https://rr-01-bucket.cdn1313.net/download/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE3MzE1MjM3MTcsInRpdGxlIjoiQmFzc2llLCBNLVRvdWNoLCBSYW5nZXIsIEFtYXphIC0gS3dlbGFuZ2EgMi4wIGZ0LiBUbWFuWHByZXNzLCBMZWVtY0tyYXp5IFtPZmZpY2lhbCBNdXNpYyBWaWRlb10iLCJwYXRoIjoiL0hJWUFBQ2pBN2RNLzMyMC5tcDMifQ.6MsEly-qdOSqK3xHr2qxfXAoZ47JXEJgqRBlafvhCeo" type="audio/mpeg">
  Your browser does not support the audio element.
</audio></td>
                @endforeach
            </tr>
        </tbody>
    </table>
   
</body>
</html>