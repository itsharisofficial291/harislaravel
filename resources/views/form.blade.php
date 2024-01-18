<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>This is a Laravel Form</title>

    <style>
      body {
        padding-top: 60px;
      }

      .form-container {
        max-width: 600px;
        margin: auto;
      }

      .error-message {
        color: red;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Welcome</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/form">Form</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('calculate') }}">Percentage and Grade Calculator</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5 form-container">
      <h1 class="text-center mb-4">Welcome to the Laravel World</h1>

      <form action="{{ url('/') }}/register" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <div class="error-message">
            @error('email')
              {{ $message }}
            @enderror
          </div>
  
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
     
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <div class="error-message">
            @error('password')
              {{ $message }}
            @enderror
          </div>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{ old('password') }}">
        </div>
     

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
          <div class="error-message">
            @error('checkbox')
              {{ $message }}
            @enderror
          </div>
        </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
