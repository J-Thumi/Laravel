<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/workers" method='POST'>
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">

        <label for="age">Age</label>
        <input type="text" name="age">

        <label for="wage">Wage</label>
        <input type="text" name="wage">

        <label for="rank">Rank</label>
        <input type="text"name="rank">
        <fieldset>
            <label >Tasks</label>
            <input type="checkbox" name="tasks[]" value="Collect Tax">Collect Tax <br>
            <input type="checkbox" name="tasks[]" value="Photocopy">Photocopy<br>
            <input type="checkbox" name="tasks[]" value="Connect">Connect<br>
            <input type="checkbox" name="tasks[]" value="Sleep">Sleep <br>
            <input type="checkbox" name="tasks[]" value="Fly">Fly <br>
            <input type="checkbox" name="tasks[]" value="Speed">Speed <br>
        </fieldset>
        <input type="submit">
    </form>
</body>
</html>