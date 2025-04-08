<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0b0c10;
            color: white;
            font-family: 'Poppins', sans-serif;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-card {
            background: linear-gradient(135deg, #1f2833, #0b0c10);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(102, 252, 241, 0.5);
            width: 100%;
            max-width: 400px;
        }
        .form-control {
            background-color: #1f2833;
            color: white;
            border: 1px solid #66fcf1;
        }
        .form-control:focus {
            background-color: #0b0c10;
            color: white;
            box-shadow: 0 0 10px rgba(102, 252, 241, 0.7);
        }
        .btn-custom {
            background-color: #66fcf1;
            color: #0b0c10;
            font-weight: bold;
            width: 100%;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #45a29e;
        }
        #invalid{
            color:red;
        }
    </style>
</head>
<body>
    <x-navbar />
    <div class="login-container">
        <div class="login-card">
            <h2 class="text-center mb-4">Administration</h2>
            <form action="adminlogin" method="post" onsubmit="return validate()">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                    <br>
                    <span id="invalid"></span>
                </div>
                <div class="mb-3 text-center">
                    <input type="submit" value="Login" class="btn btn-custom">
                </div>
            </form>
        </div>
    </div>
    <script>
        function validate(){
            let passkey="admin@gmail.com";
            let email=document.getElementById("email").value;
            let password=document.getElementById("password").value;
            if((email!=passkey) || (password!=passkey)){
                document.getElementById("invalid").innerHTML="Invalid Credentials";
                return false;

              
            }
            else{
                return true;

            }
             
        }

    </script>
</body>
</html>