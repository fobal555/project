<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
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
        table {
            background: #1f2833;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        }
        th, td {
            padding: 15px;
            text-align: center;
            color: white;
        }
        th {
            background-color: #45a29e;
        }
        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }
        tr:hover {
            background-color: rgba(102, 252, 241, 0.2);
            transform: scale(1.02);
            transition: 0.3s;
        }
        .btn-danger, .btn-primary {
            width: 100px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <x-navbar />
    <div class="container-fluid">
        <h2 class="text-center mb-4 text-info">User Management</h2>
        <div class="table-responsive">
            <table class="table table-dark table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Birthday</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Password</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->birthday}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->number}}</td>
                        <td>{{$user->password}}</td>
                        <td><span><a href="delete/{{ $user->id }}" class="btn btn-danger">Delete</a></span></td>
                        <td><span><a href="update/{{ $user->id}}" class="btn btn-primary">Edit</a></span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
