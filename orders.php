<?php
session_start();
if(isset($_SESSION['user'])){
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
       include "head.php";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            background-color:rgba(165, 165, 235, 0.274);
        border-radius:15px;
    
            margin-TOP:150px;
            margin-left:50PX;
            margin-RIGHT:50px;
            width:90%;
        }
    </style>
</head>
<body>
    <?php 
    include "navbar.php";
    ?>
    <table>
        <tr>
            <th style="margin-left :10px;">Name</th>
            <th>Brand</th>
            <th>MRP</th>
            <th>OP</th>
            <th>QTY</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
        <tr>
            <?php
            $email = $_SESSION['user'];
            $sql = "Select * from signup where email = '$email' ";
            
            $query= mysqli_query($con, $sql);
            $row=mysqli_fetch_array($query); 
            $uid=$row['id'];
          
             $sql1="select * from orders where uid='$uid' order by id desc ";
           $query1= mysqli_query($con, $sql1);
           while($row1=mysqli_fetch_array($query1)){
           $pid=$row1['pid'];
           
           $sql2="select * from product where id='$pid' ";
           $query2=mysqli_query($con,$sql2);
           $row2=mysqli_fetch_array($query2);

            ?>

            <td><?=$row2['name']?></td>
            <td><?=$row2['brand']?></td>
            <td><?=$row1['price']?></td>
            <td><?=$row1['sp']?></td>
            
            <td><?=$row1['qty']?></td>
            <td><?=$row1['date']?></td>
            <td><?=$row1['status']?></td>
           
        </tr>
        <?php
           }
           ?>
    </table>
</body>
</html>
<?php
}
else{
    header('location:login.php');
}

?>
