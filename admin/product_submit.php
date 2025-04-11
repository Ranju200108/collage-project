<?php
include "../config.php";
session_start();
if(isset($_SESSION['admin'])){
    $name = $_POST['name'];
 $brand = $_POST['brand'];
 $price = $_POST['price'];
 $sellingprice = $_POST['sellingprice'];
 $category= $_POST['cat'];

 $description= $_POST['description'];

 $image = $_FILES['image']['name'];

 $fileName = basename($_FILES['image']['name']);

   $image = $_FILES['image']['tmp_name'];
   $temp1 = explode(".", $_FILES["image"]["name"]);

 $newfilename1 = round(microtime(true)) . rand(1,999) .'.' . end($temp1);
 $targetFilePath ='../product' . $fileName;
   $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
   if (move_uploaded_file($_FILES["image"]["tmp_name"], "../product/" . $newfilename1)){
 }


  $sql = "INSERT into product(name,brand,price,sellingprice,category,description,image) VALUES
('$name','$brand','$price','$sellingprice','$category','$description','$newfilename1')";
$query = mysqli_query($con, $sql);
if($query)
{
  ?>
  <script>
    alert("sucessfully added");
    history.go(-1);
  </script>
  <?php
  // echo "success";
}
else{
    echo "error";
}
}
else{
header('location:addproduct.php');

}
?>

