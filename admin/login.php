<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
  <style>
    
.container {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f0f0f0;
}

form {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 320px;
    font-family: 'Arial', sans-serif;
    box-sizing: border-box;
}

form h1 {
    text-align: center;
    color: #333;
    font-size: 26px;
    margin-bottom: 20px;
}

form label {
    font-size: 14px;
    color: #555;
    margin-bottom: 5px;
}

input[type="username"], 
input[type="password"] {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 14px;
}

input[type="username"]:focus, 
input[type="password"]:focus {
    border-color:rgb(245, 169, 6);
    outline: none;
}

input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color:rgb(250, 173, 8);
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
.signup-link {
    color: #4CAF50;
    text-decoration: none;
    font-size: 14px;
}

.signup-link:hover {
    text-decoration: underline;
}

  </style>

<body>
    <div class="container">
        <form action="login-submit.php" method="POST">
            <h1>LOGIN </h1>
            Username:
            <input type="username" name="username" value="">
            <br>
            <br>
            Password:
            <input type="password" name="password" value="">
            <br>
            <br>
            <input type="submit" name="sign in" value="sign in">

        </form>
        <!-- <p>Don't have an account? <a href="signup" class="signup-link">Sign Up</a></p> -->
    </div>


</body>

</html>