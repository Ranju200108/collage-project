<?php
 session_start();
 $username = $_POST['username'];
 $password = $_POST['password'];

 include "../config.php";
 $sql1 = "Select * from admin_login where username = '$username' and  password='$password'";
 $query1 = mysqli_query($con, $sql1);
 
 if(mysqli_num_rows($query1)>0){
 
 
 echo  "login success";
 $_SESSION['admin'] = $username;
 header('location:addproduct.php');
                
 }
  else{
     echo "incorrect usernamme or password";
 }
  

  
?>



