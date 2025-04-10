<?php
session_start();
if(isset($_SESSION['admin'])){


?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
       include "head.php";
       include "../config.php";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            background-color:rgba(165, 165, 235, 0.274);
        border-radius:15px;
    
            margin-TOP:150px;
            margin-left:50PX;
            margin-RIGHT:50px;
            width:90%;
        }
    </style>
</head>
<body>
    <?php 
    include "navbar.php";
    ?>
    <table>
        <tr>
            <th style="margin-left :10px;">Name</th>
            <th>Brand</th>
            <th>MRP</th>
            <th>SP</th>
            <th>QTY</th>
            <th>Date</th>
            <th>Address</th>
            <th>Status</th>
        </tr>
        <tr>
            <?php
           
          
             $sql1="select * from orders where status='cancelled' order by id desc ";
           $query1= mysqli_query($con, $sql1);
           while($row1=mysqli_fetch_array($query1)){
           $pid=$row1['pid'];
           
           $sql2="select * from product where id='$pid' ";
           $query2=mysqli_query($con,$sql2);
           $row2=mysqli_fetch_array($query2);

            ?>

            <td><?=$row2['name']?></td>
            <td><?=$row2['brand']?></td>
            <td><?=$row1['price']?></td>
            <td><?=$row1['sp']?></td>
            
            <td><?=$row1['qty']?></td>
            <td><?=$row1['date']?></td>
            <td><?=$row1['address']?></td>
            <td>        
            <form  action="orders-submit.php" method="POST">
            <div class="mb-3">
               <input type="hidden" name="id" value="<?=$row1['id']?>">
                <select name="status" id=""  class="form-control" required>
             <option value="">Select Status</option>
             <option value="placed">placed</option>
             <option value="Confirm">Confirm</option>
             <option value="Delivery">Delivery</option>
             <option value="Cancelled">Cancelled</option>
                </select>
            </div>
                <div class="d-grid gap-2">
 
              <input type="submit" class="btn btn-primary" value="submit">
 
              </div>
          
            </form>
            
            </td>
           
        </tr>
        <?php
           }
           ?>
    </table>
</body>
</html>
<?php
}

?>
