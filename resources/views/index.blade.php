<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hello from blade</h1>
    @foreach($persons as $person)
    <p>Name: {{ $person->name }}</p>
    <p>Surname: {{ $person->surname }}</p>
    <!-- Display other attributes as needed -->
@endforeach


    <a href="/add">+ADD</a>
</body>
</html>