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
        <span class="pt-2">
            <a href="{{ route('person.delete', ['person' => $person->id]) }}" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" title="Edit">
                <i class="fas fa-edit"></i>
            </a>
            <form class="delete-post-form d-inline" action="{{ route('person.delete', ['person' => $person->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-post-button text-danger" data-toggle="tooltip" data-placement="top" title="Delete">DELETE</button>
            </form>
        </span>        
        
        <a href="/update/{{$person->id}}">EDIT</a>
    @endforeach
    <a href="/add">+ADD</a>
</body>
</html>