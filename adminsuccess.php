<?php

$connect= mysqli_connect("localhost", "root", "", "library_management");

$username=addslashes($_POST['username']);
$password=addslashes($_POST['password']);

   $check=mysqli_query($connect, "SELECT * FROM admin WHERE username='$username' and password='$password' ");


$count=mysqli_num_rows($check);
   if($count>0){
       header("Location:adminenter.php");
   }
   else{
       
       ?>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Library Login Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
        margin-bottom: 20px;
        text-align: center;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .login-container input[type="submit"] {
        width: 100%;
        background-color: #4caf50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .login-container input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>
    <form  method="post" enctype="multipart/form-data" action="loginsuccess.php">
         <div id="error-message" class="error-message"></div>
        <p id='wrong' style='color:red;'>Incorrect username or password</p>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" id="password" required ><br> 
        <a href="#" onclick="find()" id="pass">show password </a> <br> <br>
       
        
        <input type="submit" value="Login">
        <p>Don't have an account <a href='signup.html'>create</a></p>
    </form>
</div>
<script>

            function find(){
                var pass=document.getElementById('pass');
                var password=document.getElementById('password');
                if(password.type==='password'){
                    password.type='text';
                    pass.innerHTML='hide password';
                }
                else{
                    password.type='password';
                    pass.innerHTML='show password';
                }
            }
        </script>
</body>
</html>

    <?php
   }
?>


