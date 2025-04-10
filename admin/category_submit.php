<?php
session_start();
if(isset($_SESSION['admin'])){
    $cat = $_POST['cat'];

    include "../config.php";
    $sql = "INSERT into category(category) VALUES('$cat')";
    $query = mysqli_query($con, $sql);
    if($query){
        echo "success";
    }
    else{
        echo "error";
    }
}
else{
    header('location:login.php');
    // echo "logion";
    // echo $_SESSION['admin'];
}
?>

