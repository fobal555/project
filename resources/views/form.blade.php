<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">

    <style>
        body {
            background-color: #0b0c10;
            color: white;
        }
        .container {
            max-width: 600px;
            background: #1f2833;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(102, 252, 241, 0.3);
            margin-top: 50px;
        }
        .form-control, .form-check-input {
            background: #0b0c10;
            color: white;
            border: 1px solid #66fcf1;
        }
        .form-control:focus, .form-check-input:focus {
            box-shadow: 0 0 10px rgba(102, 252, 241, 0.7);
            border-color: #66fcf1;
        }
        .btn-primary {
            background-color: #45a29e;
            border: none;
        }
        .btn-primary:hover {
            background-color: #66fcf1;
            color: black;
        }
        span {
            color: #ff4c4c;
        }
    </style>
</head>
<body>
    <x-navbar />
    <div class="container">
        <h2 class="text-center mb-4">Register</h2>
        <form action="register" method="post" class="row g-3" onsubmit="return validate()">
            @csrf
            <div class="col-md-6">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" id="firstname">
                <span id="errorfirstname"></span>
            </div>
            <div class="col-md-6">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lastname">
                <span id="errorlastname"></span>
            </div>
            <div class="col-md-6">
                <label for="date" class="form-label">Birthday</label>
                <input type="date" class="form-control" name="date" id="date">
                <span id="errordate"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Gender</label>
                <div>
                    <input type="radio" name="gender" id="male" class="form-check-input" value="male">
                    <label for="male" class="form-check-label">Male</label>
                    <input type="radio" name="gender" id="female" class="form-check-input ms-3" valu="female">
                    <label for="female" class="form-check-label">Female</label>
                </div>
                <span id="errorgender"></span>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <span id="erroremail"></span>
            </div>
            <div class="col-md-6">
                <label for="number" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="number" id="number">
                <span id="errornumber"></span>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                <span id="errorpassword"></span>
            </div>
            <div class="col-md-6">
                <label for="confirmpassword" class="form-label">Confirm Password</label>
                <input type="password" name="confirmpassword" id="confirmpassword" class="form-control">
                <span id="errorconfirmpassword"></span>
            </div>
            <div class="col-12 text-center">
                <input type="submit" value="Register" class="btn btn-primary w-100">
            </div>
        </form>
    </div>
    <script>
      function validate(){
      

        let freg= /^[A-Za-z]{3,50}$/;  
        let lreg= /^[A-Za-z]{3,50}$/; 
        let remail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; 
        let rpassword = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*]{6,20}$/; 
        let rphone = /^[0-9]{10}$/;
        
        let firstname=document.getElementById("firstname").value;
        if(firstname==""){
            document.getElementById("errorfirstname").innerHTML="Name cannot be empty";
            return false;
        }
        if(!firstname.match(freg)){
            document.getElementById("errorfirstname").innerHTML=" enter a valid name";
            return false;
        }
        else{
            document.getElementById("errorfirstname").innerHTML="";

        }

        let lastname=document.getElementById("lastname").value;
        if(lastname==""){
            document.getElementById("errorlastname").innerHTML="Name cannot be empty";
            return false;
        }
        if(!lastname.match(lreg)){
            document.getElementById("errorlastname").innerHTML=" enter a valid name";
        
            return false;
        }
        else{
            document.getElementById("errorlastname").innerHTML="";

        }
        let date=document.getElementById("date").value;
        if(date===""){
            document.getElementById("errordate").innerHTML="Date cannot be empty";
            return false;
        }
        else{
            document.getElementById("errordate").innerHTML="";

        }
         

        if((!document.getElementById("male").checked) && !(document.getElementById("female").checked)){
            document.getElementById("errorgender").innerHTML="Select Atleast One";
            return false;
        }
        else{
            document.getElementById("errorgender").innerHTML="";

        }


        let email=document.getElementById("email").value;
        if(email==""){
            document.getElementById("erroremail").innerHTML="cannot be empty";
            return false;
        }
        else if(!email.match(remail)){
            document.getElementById("erroremail").innerHTML="enter a valid email";
            return false;

        }
        else{
            document.getElementById("erroremail").innerHTML="";

        }
        let number=document.getElementById("number").value;
        if(number==""){
            document.getElementById("errornumber").innerHTML="cannot be empty";
            return false;

        }
        else if(!number.match(rphone)){
            document.getElementById("errornumber").innerHTML="enter a valid phone nubmer";
            return false;

        }
        else{
            document.getElementById("errornumber").innerHTML="";
        }


        let password=document.getElementById("password").value;
        if(password === ""){
            document.getElementById("errorpassword").innerHTML="cannot be Empty";
            return false;

        }
        else if(!password.match(rpassword)){
            document.getElementById("errorpassword").innerHTML=" At least 6 characters, 1 letter, 1 number";
            return false;
        }
        else{
            document.getElementById("errorpassword").innerHTML="";

        }
        
        let confirmpassword=document.getElementById("confirmpassword").value;
        if(confirmpassword!=password){
            document.getElementById("errorconfirmpassword").innerHTML="password do not match";
            return false;
        }
        else{
            document.getElementById("errorconfirmpassword").innerHTML="";

        }

      }
    </script>

</body>
</html>
