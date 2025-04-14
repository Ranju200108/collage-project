<?php
session_start();
if(isset($_SESSION['user'])){
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
       include "head.php";
    ?>
    <style>
        form{
            margin-top:150px;
            margin-left:60px;
            background-color:darkgoldenrod;
            border-radius: 25px;
            width: 40%;
        }
        .form-control {
            width: 88%;
        }
        textarea{
            height:100px;
            width: 88% ;
            margin-left: 6%;
        }
        h1{
            padding-left:30px;
            color:blue;
        }
        input{
            margin-left:30px;
        }
        label{
            margin-left: 10%; 
            color:blue;
        }
    </style>
</head>
<body>
     <?php
            include "navbar.php";
       ?>
     
     <form action="placeorder.php" method="POST">
        <h1>Address</h1>
        <textarea  class="form-control" name="address" value="Address" id=""></textarea><br>
        <label for="">COD</label>
        <input type="radio" class="radio" name="payment" value="COD" checked>
        <br>
        <label for="">Online</label>

        <input type="radio" class="radio" name="payment" vlaue="online" disabled><br>
        <input type="submit" class="btn btn-primary" value="Buy Now ">
     </form>
    </body>
    </html>
<?php } else{
    header('location:signin.php');
    }?>
