<!DOCTYPE html>
<html lang="en">

<head>
  <?php
include "head.php";
  ?>
</head>

</head>
<style>
  .container {
    margin-top: 13%;
    padding-top:20px;
    max-width: 600px;
    background-color:darkgoldenrod;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
}

.container h1 {
    text-align: center;
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
  }
form {
    margin-left: 13%;
    display: flex;
    flex-direction: column;
}


input[type="text"],
input[type="email"],
input[type="password"],
input[type="address"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
}

.btn-primary {
    font-size: larger;
    text-decoration: none;
    text-align: center;
    background-color: #0630eb;
    color: #fff;
}
.btn-primary:hover {
    background-color: #00b39b;
}


form label {
    font-size: 14px;
    margin-bottom: 5px;
    font-weight: bold;
}


form br {
    display: none;
}

div {
    margin-bottom: 20px;
} 


  .login-link {
  color: #f44336;
  text-decoration: none;
}

.login-link:hover {
  text-decoration: underline;
}
</style>
<body>
<?php
include "navbar.php";
  ?>
    <div class="container">
        <form class="" action="signup-submit.php" method="POST">
            <h1> SIGN IN </h1>
            FULLNAME:
            <input type="text" name="fullname" value="">
            <br>
            <br>
            USERNAME:
            <input type="text" name="username" value="">
            <br>
            <br>
            Email:
            <input type="email" name="email" value="">
            <br>
            <br>
            Password:
            <input type="password" name="password" value="">
            <br> 
            <br>
            Confirm Password:
            <input type="password" name="confirmpassword" value="">
            <br> 
            <br>
            phonenumber:
            <input type="text" name="phonenumber" value="">
            <br>
            <br>
            Address:
            <input type="address" name="address" value=""><br> <br>
                <input type="submit" value="Sign UP" class="btn btn-primary">
                <!-- <a href="login.php"class="btn btn-primary">Sign Up</a> -->
           
        </form>
        <p>Don't have an account? <a href="login.php" class="login-link">Login</a></p>
    </div>
</body>

</html>