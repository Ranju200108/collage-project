<?php
session_start();
if(isset($_SESSION['admin'])){
include "../config.php";
$cat = $_POST['cat'];
$id = $_POST['id'];


 $sql = "UPDATE `category` SET category='$cat' WHERE id = '$id'";
$query = mysqli_query($con, $sql);
if($query){
    echo "update success";
}
else{
    echo "error";
}
}
else{
    header('location:category.php');
}
?>