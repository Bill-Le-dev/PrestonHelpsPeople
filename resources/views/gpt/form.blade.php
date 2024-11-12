<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assistant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://i.pinimg.com/originals/b7/bc/3a/b7bc3ab00630af37012ac4686abd7f52.gif') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: background 0.5s ease; /* Smooth transition for background changes */
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.7);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .container {
            position: relative;
            z-index: 1;
            padding-top: 100px;
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            color: AliceBlue;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        form {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .form-label {
            font-size: 1.2em;
        }

        textarea.form-control {
            background-color: #000000;
            color: #ffffff;
            border: 1px solid #ffffff;
            resize: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        textarea.form-control:focus {
            background-color: #000000; /* Keep the background black */
            color: #ffffff; /* Keep the text white */
            border-color: #ffffff; /* Ensure the border remains white */
            outline: none; /* Remove default focus outline */
        }

        .btn-primary {
            background-color: AliceBlue;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            color: #333;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: cornflowerblue;
        }

        .response-box {
            margin-top: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            font-size: 1.1em;
            color: #ffffff;
            text-align: left;
        }

        .response-box h3 {
            color: AliceBlue;
        }

        .background-selector {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 1;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }

        .background-selector .form-label {
            color: AliceBlue;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 2.5em;
            }

            .btn-primary {
                font-size: 0.9em;
            }

            .form-label {
                font-size: 1em;
            }
        }
        .back-button {
            position: fixed; /* Fix the button at a specific position */
            top: 20px;       /* Distance from the top of the page */
            left: 20px;      /* Distance from the left of the page */
            display: inline-block; /* Ensures the element is inline and block */
            cursor: pointer; /* Pointer cursor on hover */
            transition: transform 0.2s ease, opacity 0.2s ease; /* Smooth transitions */
            opacity: 0.9; /* Slight transparency */
        }

        .back-button-image {
            width: 40px; /* Width of the image */
            height: auto; /* Keep aspect ratio */
            border-radius: 50%; /* Circular shape */
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Add shadow */
            transition: transform 0.2s ease, opacity 0.2s ease; /* Smooth transitions */
            opacity: 0.9; /* Slight transparency */
        }

        .back-button:hover .back-button-image {
            transform: scale(1.1); /* Scale effect on hover */
            opacity: 1; /* Fully opaque on hover */
        }

        .back-button:active .back-button-image {
            transform: scale(0.95); /* Slightly shrink on click */
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="background-selector">
        @include('partials.background-selector')
    </div>
    <div class="container">
        <a href="{{ route('dashboard') }}" class="back-button">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeI8uKxjEU2K8jENpDU4I2AFAN53fzbRUwlw&s" alt="Go Back" class="back-button-image">
        </a>
        <h1>Preston Helps People (Virtual PHP assistant)</h1>
        <form action="{{ route('generate') }}" method="GET">
            <div class="mb-3">
                <label for="prompt" class="form-label">Ask me questions:</label>
                <textarea class="form-control" id="prompt" name="prompt" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Generate Text</button>
        </form>
        @if(isset($response))
            <div class="response-box mt-4">
                <h3>Response:</h3>
                <p>{{ $response }}</p>
            </div>
        @endif
    </div>
</body>
</html>