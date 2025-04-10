<?php
include "head.php";
include "navbar.php";
include "config.php";
?>
<br>
<br>
<br>
<br>
<br>
<br>

<form action="" method="POST">

<input type="search" name="search" placeholder="Search...">
<i class="ri-search-line"></i>

<input type="submit" value="Submit" class="btn btn-primary">
</form>
    <!-- <form action="" method="POST">
        <input type="search" name="search">
      
        <button type="submit"><i class="ri-search-line"></i></button>
    </form> -->
    <?php
    if(isset($_POST['search'])){

        ?>

<div class="row row-cols-1 row-cols-md-4 g-4">
<?php

$search = $_POST['search'];
   $sql1= "select * from product where name like '%$search%'";
  $query=mysqli_query($con ,$sql1);
  while($row=mysqli_fetch_array($query)){
  $p1 = $row['price'];
    $p2 = $row['sellingprice'];

    $dis = ($p1-$p2)*100/$p1;
    $dis = number_format($dis, 2);

  ?>
  <div class="col">
    <div class="card h-100">
      <img src="product/<?=$row['image']?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$row['name']?></h5>
        <p class="card-text ">
            <s> Rs. <?=$row['price']?></s>  <?=$dis?>%off<br>Rs. <?=$row['sellingprice']?></p>
        
    <a href="viewdetail.php?id=<?=$row['id']?>"  class="card-link btn btn-primary"> Veiw More</a>
    <?php 
    if(isset($_SESSION['user'])){
      $email=$_SESSION['user'];
      $sql2="select * from signup where email='$email'";
      $query2=mysqli_query($con,$sql2);
      $row2=mysqli_fetch_array($query2);
      $uid=$row2['id'];
      $pid = $row['id'];

      $sql3="select* from cart where uid='$uid' and pid='$pid'";
    $query3=mysqli_query($con,$sql3);
    $count=mysqli_num_rows($query3);
    if($count==0){
      ?>
<a href="addcart.php?id=<?=$row['id']?>" class="card-link btn btn-primary">Add Cart</a>

      <?php
    }
  else{
?>

<a href="viewcart.php" class="card-link btn btn-primary">View Cart</a>


<?php
  }
    }
    else{
      ?>
<a href="addcart.php?id=<?=$row['id']?>" class="card-link btn btn-primary">Add Cart</a>
      
      <?php
    }
  ?>
  
      </div>
    </div>
  </div>
<?php
  }
?>
 
</div>







<?php
  
    }
?>
 

</body>
</html>
