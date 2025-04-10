<?php
session_start();
if(isset($_SESSION['user'])){
    include "config.php";
    $email = $_SESSION['user'];
    $address=$_POST['address'];
    $sql = "Select * from signup where email = '$email' ";
    
 $query= mysqli_query($con, $sql);
 $row = mysqli_fetch_array($query);
 
   
    $uid = $row['id'];
    $date = date("Y/m/d h:m:s");


    $sql2 ="select * from cart where  uid = '$uid' ";
    $query2= mysqli_query($con, $sql2);
    while($row2 = mysqli_fetch_array($query2)){
        $pid = $row2['pid'];
        $sql3="select *from product where id = '$pid'";
        $query3=mysqli_query($con,$sql3);
        $row3=mysqli_fetch_array($query3);
          $sp=$row3['sellingprice'];
          $price=$row3['price'];
          $qty=$row2['qty'];

                $sql4="insert into orders(pid,uid,price,sp,address,status,date,qty) 
                values('$pid','$uid','$price','$sp','$address','Placed','$date' ,'$qty')";
                $query4=mysqli_query($con,$sql4);
                if($query4){
                        $sql5="delete from cart where pid='$pid' and uid='$uid'";
                        $query5=mysqli_query($con,$sql5);?>
                        <script>
                       
                    </script>
                    <?php
                }
                else{
                    
                }





}
  
    header('location:orders.php');
  
}
?>
