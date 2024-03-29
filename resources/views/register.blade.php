<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Include any additional CSS or stylesheets here -->
</head>
<body>

@include('welcome')

<div class="calculator-container">
    <form action="{{ url('/register') }}" method="POST">
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

        <button type="submit" class="btn btn-primary text-center">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Check if a success message exists in the session
        @if(session('success'))
            // Display an alert with the success message
            alert("{{ session('success') }}");
        @endif
    });
</script>

</body>
</html>

</body>
</html>
