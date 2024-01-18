<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>This is a Laravel Form</title>

    <style>
        body {
            padding-top: 60px;
            background-color: #f8f9fa;
        }

        .form-container {
            margin: auto;
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            animation: fadeIn 0.5s ease-in-out;
        }

        .error-message {
            color: red;
        }

        .result-container {
            max-width: 300px;
            margin: auto;
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            animation: fadeIn 0.5s ease-in-out;
        }

        .result-container h1 {
            color: #007bff;
        }

        .result-container p {
            margin: 10px 0;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.10);
            animation: fadeInUp 0.5s ease-in-out;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ced4da;
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
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #0056b3;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Welcome</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
     
        <br>
        <!-- Your form code here -->
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
        <div class="container mt-5 result-container">
            <h1>Result</h1>
            @if(isset($percentage) && isset($grade))
                <h5><b>Percentage:  </h5><p>{{ $percentage }}%</b></p>
                <h5><b>Grade:  </h5><p> {{ $grade }}</b></p>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
