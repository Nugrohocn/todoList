<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar bg-body-tertiary">
      <div class="container d-flex justify-content-center"> <!-- Center the content -->
        <a class="navbar-brand" href="#">
          <h2 class="text-center">Todolist</h2> <!-- Add text-center to center the text -->
        </a>
      </div>
  </nav>
  
      @yield('content')
</body>
</html>