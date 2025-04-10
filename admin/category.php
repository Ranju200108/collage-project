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

    <style>

body{
    background-color:rgba(143, 191, 238, 0.367);
}
tr:nth-child(1){
    background:#000;
    color:#fff;
}
 tr:nth-child(even){
    background:#ddd;
}
        </style>
</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <hr>
<div class="container">
    <form class="" action="category_submit.php" method="POST">
    Category:<br>
    <input type="text" name="cat" value="" class="form-control"  >
    <br>
    
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">

    </form>
<br><br>
<table class="" border="1" style="width:100%" >
    <tr>
        <th>Id</th>
        <th>Category</th>
        <th>Action</th>
    </tr>
    <?php
    
$sql1 = "select * from category";
$query=mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($query)){
 ?>
 <tr>
 <td><?=$row['id'];?></td>
    <td><?=$row['category'];?></td>
    <td><a href="updatecat.php?id=<?=$row['id']?>">edit</a></td>
    
 </tr>
 <?php
}
   
?>
</table>
</div>
</body>
</html>
<?php
 }
 else{
     header('location:catrgory_submit.php');
 }
?>