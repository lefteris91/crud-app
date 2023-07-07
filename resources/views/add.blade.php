<x-head>
</x-head>
<body>
    <form action="/add" method="POST" class="m-4">
        @csrf
      
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
      
        <div class="mb-3">
          <label for="surname" class="form-label">Surname</label>
          <input type="text" name="surname" id="surname" class="form-control">
        </div>
      
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">ADD</button>
        </div>
      </form>    
</body>
</html>