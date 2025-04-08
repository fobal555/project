<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="test.css">
    <meta http-equiv="refresh" content="2;url=/"> <!-- Redirects after 5 seconds -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <style>
        body {
            background-color: #0b0c10;
            color: white;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .thank-you-card {
            background: linear-gradient(135deg, #1f2833, #0b0c10);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        }
        .btn-home {
            margin-top: 20px;
            background-color: #45a29e;
            border: none;
        }
        .btn-home:hover {
            background-color: #66fcf1;
        }
    </style>
</head>
<body>
<div class="thank-you-container">
        <h1>Thank You for Registering!</h1>
        <p>You will be redirected to the homepage shortly...</p>
        <a href="/" class="btn">Go to Homepage Now</a>
    </div>
</body>
</html>