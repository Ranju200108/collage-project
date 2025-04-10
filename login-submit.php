<?php
 session_start();
 $email = $_POST['email'];
 $password = $_POST['password'];

 include "config.php";
 $sql1 = "Select * from signup where email = '$email' and  password='$password'";
 $query1 = mysqli_query($con, $sql1);
 
//  $count = mysqli_num_rows($query1);
 if(mysqli_num_rows($query1)>0){
 
 
//  if($count > 0){
 
 
 echo  "login success";
 $_SESSION['user'] = $email;
 header('location:index.php');
                
 }
  else{
     echo "incorrect usernamme or password";
 }
  

  
?>