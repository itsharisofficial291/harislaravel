<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
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
    
    <h1>Result</h1>
    <p>Percentage: {{ $percentage }}%</p>
    <p>Grade: {{ $grade }}</p>
</body>
</html>
