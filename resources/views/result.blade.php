<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.result-container {
    text-align: center;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
}

p {
    margin-bottom: 16px;
}

.grade {
    font-size: 24px;
    font-weight: bold;
    color: #007bff;
}
    </style>
</head>
<body>
<a href="/">Welcome</a>
<br>
<a href="/about">About</a>
<br>
<a href="/contact">Contact</a>
    
    <h1>Result</h1>
    <p>Percentage: {{ $percentage }}%</p>
    <p>Grade: {{ $grade }}</p>
</body>
</html>
