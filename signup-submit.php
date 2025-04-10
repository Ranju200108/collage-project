<?php
 $fullname = $_POST['fullname'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $confirmpassword= $_POST['confirmpassword'];
 $phonenumber = $_POST['phonenumber'];
 $address = $_POST['address'];
// echo $city = $_POST['city'];
include "config.php";

$sql1 = "select * from signup where email = '$email'";
$query1 = mysqli_query($con, $sql1);

$count = mysqli_num_rows($query1);


if($count == 0){



                if($password==$confirmpassword) 
                    {
                        
                $sql="insert into signup(fullname,username,email,password,phonenumber,address)
                values('$fullname','$username', '$email','$password','$phonenumber','$address')";
                $query = mysqli_query($con,$sql);
                if($query){
                    echo "sucess";
                }
                else{
                    echo "error";
                }
                    }
                    else{
                        echo "password mismatch";
                    }
}
else{
    echo "email already exist";
    }
 
?>
