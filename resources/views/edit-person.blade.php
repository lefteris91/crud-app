<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD</title>
</head>
<body>
    <form action="/update/{{$person->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$person->name}}">
        <input type="text" name="surname" value="{{$person->surname}}">
        <button type="submit">SAVE CHANGES</button>
    </form>
</body>
</html>