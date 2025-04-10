
<!DOCTYPE html>
<html lang="en">
<head>

    <style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px; 
    margin: 50px auto;
    padding: 20px;
    background-color:rgb(143, 119, 54);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

h1 {
    text-align: center;
    color: #333;
    font-size: 28px;
    margin-bottom: 30px;
}

label {
    font-size: 14px;
    font-weight: 600;
    color: #555;
    margin-bottom: 10px;
    display: block;
}

input[type="password"] {
    padding: 10px;
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    margin-bottom: 20px;
    background-color: #f9f9f9;
}

input[type="password"]:focus {
    border-color: #007bff;
    background-color: #fff;
    outline: none;
}

input[type="submit"] {
    padding: 12px;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

input[type="password"], input[type="submit"] {
    margin-bottom: 1rem;
}

form {
    padding: 20px;
}

form input[type="password"], form input[type="submit"] {
    transition: all 0.3s ease;
}

form input[type="password"]:focus, form input[type="submit"]:focus {
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    border-color: #007bff;
}

    </style>
</head>
<body>
<?php
include "head.php";
include "navbar.php";
include "config.php";
  ?>
  <hr>
  <h1>Change Password</h1>
<form class="" action="changepassword_submit.php" method="POST">

    Password:
    <input type="password" name="password" value="">
    <br>
    New Password:
    <input type="password" name="newpassword" value="">
    <br>
    Confirm New Password:
    <input type="password" name=" confirmnewpassword" value="">
    <br>
    <input type="submit" name="changepassword" value="changepassword">
</form>
</body>
</html>
 