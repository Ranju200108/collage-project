<?php
include "head.php";
include "navbar.php";
include "config.php";

   ?>
   <?php
   
   $id=$_GET['id'];

   $sql1="select* from category where id = '$id'";
   $query1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($query1);
   ?>
  <div class="container" style="margin-top:210px; ">
  <h1><?=$row1['category']?></h1>
    <div class="row">
      <?php
    
    $sql="select * from product where category ='$id'";
    
    $query1=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($query1)){
        ?>
        <div class="col-md-3">
          <?php
        $p1 = $row['price'];
        $p2 = $row['sellingprice'];
        
        $dis = ($p1-$p2)*100/$p1;
        $dis = number_format($dis, 2);
        
        ?>
 
                <div class="card h-100">
                  <img src="product/<?=$row['image']?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?=$row['name']?></h5>
                    <p class="card-text ">
                      <s> Rs. <?=$row['price']?></s>  <?=$dis?>%off<br>Rs. <?=$row['sellingprice']?></p>
                      
                      <a href="viewdetail.php?id=<?=$row['id']?>"  class="card-link btn btn-primary"> Veiw More</a>
                      <a href="addcart.php" class="card-link btn btn-primary">Add Cart</a>
                      
     
      </div>
      </div>
      </div>
<?php
  }
?>
    
    

</body>
</html>
