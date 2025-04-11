
<?php
include "config.php";
session_start();
?>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="img/logo1.jpeg" alt=""></a>
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">AboutUs</a>
        </li>
        <?php
        if(isset($_SESSION['user'])){
        ?>
        <li class="nav-item">
          <a class="nav-link" href="orders.php">Orders</a>
        </li>
        <?php
        }
        ?>
        <?php
        if(isset($_SESSION['user'])){
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My collection
          </a>
          <ul class="dropdown-menu">

          <?php   
          $sql = "select * from category";
         $query= mysqli_query($con,$sql);
         while($row = mysqli_fetch_array($query)){
         
         
          ?>
    
            <li><a class="dropdown-item" href="cat_order.php?id=<?=$row['id']?>"><?=$row['category']?></a></li>
            <?php
         
         }
         ?>
         
          </ul>
        </li>
        <?php
        }
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Purchase
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Online</a></li>
            <li><a class="dropdown-item" href="#">Offline</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        My account
          </a>
          <ul class="dropdown-menu">
            
          </ul>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact</a>
        </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="ri-user-fill"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
            <?php
            if(isset($_SESSION['user'])){
            ?>
            <li><a class="dropdown-item" href="changepassword.php">change password</a></li>
          </ul>
          <?php
            }
            ?>
        </li>
          <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="search.php"><i class="ri-search-line"></i></a>
          </li>
          <?php
          if(isset($_SESSION['user'])){
          ?>
          <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="viewcard.php"><i class="ri-shopping-cart-2-line"></i></a>
          </li>
          <?php
          }
          ?>
          <?php
            if(!isset($_SESSION['user'])){
          ?>
          <li class="nav-item">
           <a  href="login.php" class="card-link btn btn-danger" style="float:right">Login</a>
          </li>
          <?php
            }
            else{?>
            <?php
            }
            ?>
            <?php
            if(isset($_SESSION['user'])){
            ?>
          <li class="nav-item">
           <a  href="logout.php" class="card-link btn btn-primary" style="float:right">Logout</a>
          </li>
          <?php
            }
            ?>
        </ul>
    </div>
 </div>
</nav>
