<?php
include "../config.php";
$id=$_GET['id'];
$sql="select * from product  where id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include "head.php";
  ?>
   
</head>
<style>
    .mb-3{
    background-color:rgba(143, 191, 238, 0.367);
}
form{
            margin-left:100px;
            margin-right:100px;
        }
</style>
<body>


<?php
include "navbar.php";

?>
    <form action="editproduct_submit.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value ="<?= $id ?>">

 <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?=$row['name']?>" id="exampleInputname1">
  </div>
  <div class="mb-3">
    <label for="exampleInputBrand" class="form-label">Brand</label>
    <input type="text" class="form-control" name="brand" value="<?=$row['brand']?>"  id="exampleInputbrand1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" value="<?=$row['price']?>"  id="exampleInputPrice">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputSelling Price" class="form-label">Selling Price</label>
    <input type="text" class="form-control" name="sellingprice" value="<?=$row['sellingprice']?>"  id="exampleInputSelling Price">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputCategory" class="form-label">Category</label>
    <select name="cat" id=""  class="form-control" required>
        <option value="">Select Category</option>
       

        <?php   
         $sql1 = "select * from category";
         $query1=mysqli_query($con,$sql1);
         while($row1 =mysqli_fetch_array($query1)){
          ?>
    <option value="<?php  echo $row1['id'] ?>"   <?php if($row1['id'] == $row['category']){ echo "selected"; }  ?>   ><?php  echo $row1['category'] ?></option>
    <?php
         }
         ?>
       
    </select>
  </div>
 
 
  <div class="mb-3">
    <label for="exampleInputDescription1" class="form-label">Description</label>
     <textarea class="form-control" name="description"  id="exampleInputDescrition1"><?=$row['description']?></textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInputImage1" class="form-label">Image</label>
     <input type="file" name="image">
  </div>
  <div class="d-grid gap-2">
 
  
   <input type="submit" class="btn btn-primary" value="Update Product">
  
  </div>   
  
  


    </form>
</body>
</html>