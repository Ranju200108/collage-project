<?php
session_start();

    include "../config.php";
$status= $_POST['status'];
$id = $_POST['id'];

 $sql1 = " UPDATE `orders` SET status='$status' WHERE id = '$id'";
$query1 = mysqli_query($con, $sql1);

if($query1)
{
    echo"sucessfully changed ";
    // header('location:orders.php');
}
?>