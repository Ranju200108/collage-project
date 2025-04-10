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
  ?>
  <div id="carouselExampleAutoplaying" class="carousel slide main-seection" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  

 <section class="home-card">
    <div class="container">
        <div class="row">
        <?php
  $sql1= "select * from product";
  $query=mysqli_query($con ,$sql1);
  while($row=mysqli_fetch_array($query)){
 

    $p1 = $row['price'];
    $p2 = $row['sellingprice'];

    $dis = ($p1-$p2)*100/$p1;
    $dis = number_format($dis, 0);

  ?>
            <div class="col-md-3">
                <div class="card">
                <img src="product\<?=$row['image']?>" alt="">
                <div class="card-body">
                        <h5 class="card-title"><?=$row['name']?></h5>
                        <p><?=$row['brand']?></p>
                        <p class="card-text"> <s>र <?=$row['price']?></s> <?=$row['sellingprice']?> Discount:<?=$dis?>%</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="viewdetail.php?id=<?=$row['id']?>" class="btn btn-primary">View detail</a>
                    </div>
                </div>
            </div>
            <?php
  }
?>
            
            

        </div>

    </div>
</secttion> 
  <?php
   include "footers.php";
   ?>
</body>
</html>
