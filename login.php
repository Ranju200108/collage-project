<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<head>
  <?php
include "head.php";
  ?>
</head>
  <style>
    .container {
    max-width: 400px;
    margin: 150px auto;
    padding: 20px;
    background-color:darkgoldenrod;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
}

.container h1 {
    text-align: center;
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

input[type="username"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

form br {
    display: none;
}
.signup-link {
  color: #f44336;
  text-decoration: none;
}

.signup-link:hover {
  text-decoration: underline;
}


  </style>
<body>
<?php
include "navbar.php";
  ?>
    <div class="container">
        <form action="login-submit.php" method="POST">
            <h1>LOGIN </h1>
            Email:
            <input type="email" name="email" value="">
            <br>
            <br>
            Password:
            <input type="password" name="password" value="">
            <br>
            <br>
            <input type="submit" name="sign in" value="sign in">

        </form>
        <p>Don't have an account? <a href="signup.php" class="signup-link">Sign Up</a></p>
    </div>


</body>

</html>