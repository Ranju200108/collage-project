<?php
   session_start();
   if(isset($_SESSION['admin'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include "head.php";
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    table {
        background-color:rgba(143, 191, 238, 0.367);
        width:100%
    }
    table tr th, table tr td{
        border:1px solid black;
    }
   
  tr:nth-child(even) {
    background:#ddd;
  }
  tr:nth-child(1){
    background: #000;
    color:#fff;
    padding:10px;
  }

</style>
</head>
<body>
<?php
include "navbar.php";

?>
    <table style="" >
        <tr>

            <th>id</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Price</th>
            <th>Selling Price</th>
            <th>Category</th>
            <th>Despription</th>
            <th>image</th>
            <th></th>
            <th></th>
            </tr>
            <?php
        
 
   
   include "../config.php";
   $sql1 = "select * from product";
   $query=mysqli_query($con,$sql1);
   while($row = mysqli_fetch_array($query)){
  ?>
  <tr>
  <td><?=$row['id'];?></td>
    <td><?=$row['name'];?></td>
    <td><?=$row['brand'];?></td>
    <td><?=$row['price'];?></td>
    <td><?=$row['sellingprice'];?></td>
    <td><?=$row['category'];?></td>
    <td><?=$row['description'];?></td>
    <td> <img src="../product/<?=$row['image'];?>" alt="" style="width:50px;"> </td>
    <th>  <a href="editproduct.php?id=<?=$row['id']?>">edit</a>  </th>
    <td><a href="deleteproduct.php?id=<?=$row['id']?>">delete</a></td>
   
  </tr>
  <?php
  }
   
  ?>
    </table>
</body>
</html>
<?php
 }
 else{
     header('location:login.php');
 }
?>
