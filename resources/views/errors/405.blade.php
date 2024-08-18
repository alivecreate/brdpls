<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>405 - Method Not Allowed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 48px;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #666;
        }
        a {
            color: #007bff;
            text-decoration: none;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>405 - Method Not Allowed</h1>
    <p>Please ensure that you are using the correct HTTP method or contact the site administrator if you believe this is an error.</p>
    <a href="{{ route('index') }}">Return to Home Page</a>
</body>
</html>
