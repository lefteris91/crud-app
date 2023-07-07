<x-head>
</x-head>
<body>
    <h1>Person's List App</h1>
    @foreach($persons as $person)
    <div class="container">
        <p>Name: {{ $person->name }}</p>
        <p>Surname: {{ $person->surname }}</p>
        <form class="delete-post-form d-inline" action="/delete/{{$person->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
        <a href="/edit/{{$person->id}}" class="btn btn-success">EDIT</a>
    </div>
    @endforeach
    <a href="/add" class="btn btn-primary">+ADD</a>
</body>
</html>