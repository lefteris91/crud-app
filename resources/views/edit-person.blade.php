<x-head>
</x-head>
<style>
    body{
    text-align: center;
    background-color: bisque;
    }
</style>
<body>
    <form action="/update/{{$person->id}}" method="POST" class="m-4">
        @csrf
        @method('PUT')
      
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" value="{{$person->name}}" id="name" class="form-control">
        </div>
      
        <div class="mb-3">
          <label for="surname" class="form-label">Surname</label>
          <input type="text" name="surname" value="{{$person->surname}}" id="surname" class="form-control">
        </div>
      
        <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
    </form>      
</body>
</html>