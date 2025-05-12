<?php
session_start();
if(isset($_SESSION['user'])){
    include "config.php";
    $email = $_SESSION['user'];
    $sql = "select * from signup where email ='$email'";

    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);

    $pid=$_GET['id'];
    $uid = $row['id'];
    $date = date("Y/m/d h:m:s");


    $sql2 ="select * from cart where pid ='$pid' and uid = '$uid' ";
    $query2= mysqli_query($con, $sql2);
    $count = mysqli_num_rows($query2);
 
 
 if($count <= 0){

    $sql1 ="insert into cart(pid,uid,date,qty) values('$pid','$uid','$date','3')";
    
    $query1= mysqli_query($con, $sql1);
    if($query1){
        echo "success";
      header('location:index.php'); 
      
    }
 
    else{
        echo "error";
        }
    }
 else{
    echo"already add this product";
    }
}
else{
    header('location:login.php');
}
?> 






