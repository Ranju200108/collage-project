<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
body {
    font-family: 'Arial', sans-serif;
    background-color:hsl(30, 16.70%, 97.60%);
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
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

input[type="text"] {
    padding: 10px;
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    margin-bottom: 20px;
    background-color: #f9f9f9;
}

input[type="text"]:focus {
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

input[type="text"], input[type="submit"] {
    margin-bottom: 1rem;
}

form {
    padding: 20px;
}

form input[type="text"], form input[type="submit"] {
    transition: all 0.3s ease;
}

form input[type="text"]:focus, form input[type="submit"]:focus {
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    border-color: #007bff;
}

    </style>
</head>
<body>
    <?php
    include "head.php";
    include "navbar.php";
    $id = $_GET['id'];
    include "../config.php";
  $sql1 = "select * from category where id = '$id'";
  $query=mysqli_query($con,$sql1);
  $row = mysqli_fetch_array($query);
    ?>
    <hr>
<div class="container">
    <form class="" action="updatecat_submit.php" method="POST">

    Update category:<br><br>
    <input type="text" name="cat" value="<?=$row['category']?>"  >
    <input type="hidden" name="id" value="<?=$row['id']?>"  >
    <br>
    <br>
    <input type="submit" name="submit" value="Submit">

    </form>

 </div>
</body>
</html>