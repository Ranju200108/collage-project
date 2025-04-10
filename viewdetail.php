<!DOCTYPE html>
<html lang="en">
<head>
  <?php
       include "head.php";
  ?>
</head>
<body>
     
  <?php
       include "navbar.php";
       include "config.php";
       $id = $_GET['id'];
       $sql = "select * from product where id = '$id'";
       $query = mysqli_query($con, $sql);
       $row = mysqli_fetch_array($query);
       
    $p1 = $row['price'];
    $p2 = $row['sellingprice'];

    $dis = ($p1-$p2)*100/$p1;
    $dis = number_format($dis, 0);

  ?>

  
  <section class="container" style="padding-top:150px;">
   <h1> Product Details</h1>
   <div class="row">
    <div class="col-md-4">
     <img alt="jwellay photo" class="w-full mb-4" height="400px" src="product\<?=$row['image']?>" width="100%"/>
     
    </div>
    <div class="col-md-8">
                    <h3>Name:<?=$row['name']?></h3>
                    <h4>Brand:<?=$row['brand']?> </h4>
                    <p>MRP:<?=$row['price']?></p>
                    <p>Discount:<?=$dis?>%<p>
                    <p>Our Price:<?=$row['sellingprice']?></p>
                    <p>Description:<?=$row['description']?></p>
                    <a href="addcart.php?id=<?=$row['id']?>" class="btn btn-primary">Add to Cart</a>
                    <a href="#" class="btn btn-primary">View detail</a>


</div>




</div>
</section>



   <?php
      include "footer.php";
   ?>
</body>
</html>

