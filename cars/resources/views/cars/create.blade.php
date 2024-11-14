<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>create</h1>

    <form action="/cars" method="POST">
        @csrf
        <label for="name">name</label>
        <input type="text" name="name">
        <label for="model">model</label>
        <input type="text" name="model">
        <label for="year">year</label>
        <input type="text" name='year'>
        <label for="horsepower">horsepower</label>
        <input type="text" name="horsepower">
        <input type="submit" value="Create">
    </form>
</body>
</html>