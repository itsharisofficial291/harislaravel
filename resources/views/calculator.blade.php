<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percentage Calculator</title>
    <style>
        // resources/sass/app.scss

body {
    font-family: 'Helvetica', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1 {
    color: #333;
}

form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
<a href="/">Welcome</a>
<br>
<a href="/about">About</a>
<br>
<a href="/contact">Contact</a>
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
