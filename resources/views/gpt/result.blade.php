<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPT Text Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://media.giphy.com/media/26ufdipQqU2lhNA4g/giphy.gif') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        .btn-secondary {
            background-color: AliceBlue;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            color: #333;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #f0f8ff;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 2.5em;
            }

            .btn-secondary {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="container">
        <h1>GPT Text Result</h1>
        <div class="response-box mt-4">
            <h3>Response:</h3>
            <p>{{ $response }}</p>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Back</a>
    </div>
</body>
</html>