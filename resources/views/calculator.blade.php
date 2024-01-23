<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('welcome')

    <div class="calculator-container">
        <form class="calculator-form" method="post" action="{{ route('calculator') }}">
            @csrf
            <label for="total_marks">Total Marks:</label>
            <input type="number" name="total_marks" required>
            <label for="obtained_marks">Obtained Marks:</label>
            <input type="number" name="obtained_marks" required>
            @if(isset($percentage) && isset($grade))
                <div class="result">
                    <h5>Your <b>Percentage:</b> is</h5>
                    <p>{{ $percentage }}%</p>
                    <h5>Your <b>Grade:</b> is</h5>
                    <p>{{ $grade }}</p>
                </div>
            @endif
            <br>
            <button type="submit">Calculate</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
