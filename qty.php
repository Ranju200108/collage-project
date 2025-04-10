<?php
session_start();
if(isset($_SESSION['user'])){
include "config.php";

$id = $_POST['id'];
$qty = $_POST['qty'];

 echo $sql = "UPDATE `cart` SET `qty`='$qty' WHERE id = '$id'";
 $query = mysqli_query($con, $sql);
if($query){
   header('location:viewcard.php');
}
else{
    echo "error";
}
}
else{
    header('location:.php');
}

?>