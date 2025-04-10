<?php

session_start();
if(isset($_SESSION['user']))
{
    include "config.php";
    $email = $_SESSION['user'];
 $password = $_POST['password'];
 $newpassword= $_POST['newpassword'];
 $confirmnewpassword= $_POST['confirmnewpassword'];


 $sql1 = "Select * from signup where email = '$email' and  password = '$password'";
$query1 = mysqli_query($con, $sql1);

$count = mysqli_num_rows($query1);


if($count == 1){



                if($newpassword==$confirmnewpassword) 
                    {
                        
                $sql="update signup set password = '$newpassword' where email = '$email'" ;
                $query = mysqli_query($con,$sql);
                if($query){
                    ?>
                    <script>
                      alert("Password change successfully");
                      window.location.href = "changepassword.php";
                    </script>
                    <?php
                }
                else{
                    echo "error";
                }
                    }
                    else{
                        ?>
                    <script>
                      alert("new password and confirm Password Mismatch");
                      window.location.href = "changepassword.php";
                    </script>
                    <?php
                    }
}
else{
    ?>
                    <script>
                      alert("Current Password Wrong");
                      window.location.href = "changepassword.php";
                    </script>
                    <?php
}
}
else{
    header('location:login.php');
}
?>
