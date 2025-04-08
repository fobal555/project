<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Games</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <style>
        body {
            background-color: #0b0c10;
            color: white;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            background-color: #1f2833;
            color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);
            transition: 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.3);
        }
        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 200px;
            object-fit: cover;
        }
        .btn-primary {
            background-color: #45a29e;
            border: none;
        }
        .btn-primary:hover {
            background-color: #66fcf1;
            color: #0b0c10;
        }
    </style>
</head>
<body>
    <x-navbar />

    <div class="container">
        <h2 class="text-center text-info mb-4">Custom Games</h2>
        <div class="row">
         
            <div class="col-md-6">
                <div class="card">
                    <img src="{{ asset('images/dicewallpaper.jpg') }}" class="card-img-top" alt="Game 1">
                    <div class="card-body">
                        <h5 class="card-title"> Lucky Dice </h5>
                        <p class="card-text">A Dice game create for you to play with your friends</p>
                        <a href="dice" class="btn btn-primary">Play Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="{{ asset('images/drumwallpaper.jpg') }}" class="card-img-top" alt="Game 2">
                    <div class="card-body">
                        <h5 class="card-title">Drum</h5>
                        <p class="card-text">Play your own custom music</p>
                        <a href="drum" class="btn btn-primary">Play Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
