<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="" rel="stylesheet">

</head>
<body>
    <h1>hello from blade</h1>
    @foreach($persons as $person)
        <p>Name: {{ $person->name }}</p>
        <p>Surname: {{ $person->surname }}</p>
        <form class="delete-post-form d-inline" action="/delete/{{$person->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-post-button text-danger">DELETE</button>
        </form>
        <a href="/edit/{{$person->id}}">EDIT</a>
    @endforeach
    <a href="/add">+ADD</a>
</body>
</html>