<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percentage Calculator</title>
    <link rel="stylesheet" href="../css/app.css">


</head>
<body>
<center>
        <h1>Welcome to Percentage or Grade finder</h1>
 
    <nav>
        <a href="{{ route('home') }}">Welcome</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="{{ route('calculate') }}">Percentage and Grade Calculator</a>
    </nav>
    </center>
    <h1>Percentage Calculator</h1>
    @if(isset($percentage) && isset($grade))
        <p>Percentage: {{ $percentage }}%</p>
        <p>Grade: {{ $grade }}</p>
    @endif
    <form method="post" action="{{ route('calculate') }}">
        @csrf
        <label for="total_marks">Total Marks:</label>
        <input type="number" name="total_marks" required>
        <br>
        <label for="obtained_marks">Obtained Marks:</label>
        <input type="number" name="obtained_marks" required>
        <br>
        <button type="submit">Calculate</button>
    </form>
    
</body>
</html>
