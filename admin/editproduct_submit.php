<?php
session_start();
if(isset($_SESSION['admin'])){
    include "../config.php";
$id= $_POST['id'];
    $name = $_POST['name'];
 $brand = $_POST['brand'];
 $price = $_POST['price'];
 $sellingprice = $_POST['sellingprice'];
 $category= $_POST['cat'];
 $despription= $_POST['description'];
 $image = $_FILES['image']['name'];
    if($image == ''){

  $sql="update product set name='$name', brand='$brand', price='$price',
 sellingprice='$sellingprice',category='$category', description='$despription' where id ='$id'";
  $query = mysqli_query($con,$sql);
  if ($query){
    echo "sucess";
}

else{
    "error";
}
    }
    else{
        

        $sql ="select * from  product where id = '$id'";
        $query = mysqli_query($con,$sql);
$row= mysqli_fetch_array($query);
        $image = $row['image'];
        unlink("../product/". $image);

        $image = $_FILES['image']['name'];

 $fileName = basename($_FILES['image']['name']);

   $image = $_FILES['image']['tmp_name'];
   $temp1 = explode(".", $_FILES["image"]["name"]);

 $newfilename1 = round(microtime(true)) . rand(1,999) .'.' . end($temp1);
 $targetFilePath ='../product' . $fileName;
   $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
   if (move_uploaded_file($_FILES["image"]["tmp_name"], "../product/" . $newfilename1)){
 }

  $sql = "update product set name='$name', brand='$brand', price='$price',
 sellingprice='$sellingprice',category='$category', description='$despription',
  image = '$newfilename1' where id ='$id'";
$query = mysqli_query($con, $sql);
if($query){
    echo "success";
}

else{
    "error";
}
   
    }
}
else{
    header('location: login.php');
}
?>