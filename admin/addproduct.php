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
     
body {
    font-family: 'Arial', sans-serif;
    background-color:white;
    margin: 0;
    padding: 0;
}

.col-md-12 {
    width: 98.5vw;
    padding: 20px;
    background-color:rgb(255, 203, 91);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

h1 {
    text-align: center;
    color: #333;
    font-size: 32px;
    margin-bottom: 20px;
}

.form-label {
    font-size: 20px;
    font-weight: 600;
    color: black;
    margin-bottom: 10px;
    display: block;
}

input.form-control, select.form-control, textarea.form-control {
    padding: 10px;
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    margin-bottom: 20px;
    background-color: #f9f9f9;
}

input.form-control:focus, select.form-control:focus, textarea.form-control:focus {
    border-color: #007bff;
    border-color:rgb(69, 13, 3);
    outline: none;
}

.d-grid .btn {
    padding: 12px;
    border-color:rgb(69, 13, 3);
    border: none;
    border-radius: 5px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.d-grid .btn:hover {
    border-color:rgb(30, 6, 1);
}

select.form-control {
    background-color: #f9f9f9;
}

textarea.form-control {
    height: 150px;
    resize: vertical;
}

.mb-3 {
    margin-bottom: 20px;
}

label {
    margin-bottom: 8px;
    font-weight: bold;
}

input, select, textarea {
    margin-bottom: 1rem;
}

form {
    padding: 20px;
}

form input, form select, form textarea {
    transition: all 0.3s ease;
}

form input:focus, form select:focus, form textarea:focus {
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    border-color: #007bff;
}

    </style>
   </head>
<body>
<div class="col-md-12">

<?php
include "navbar.php";

?>
<hr>
<h1>Add Product</h1>
<form class="" action="product_submit.php" method="POST"  enctype="multipart/form-data">

  


 <div class="mb-3">
    <label for="exampleInputTile" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputname1">
  </div>
  <div class="mb-3">
    <label for="exampleInputAuthorname" class="form-label">Brand</label>
    <input type="text" class="form-control" name="brand" id="exampleInputbrand1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" id="exampleInputPrice">
  </div>

  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Selling Price</label>
    <input type="text" class="form-control" name="sellingprice" id="exampleInputPrice">
  </div>
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Category</label>
    <select name="cat" id=""  class="form-control" required>
        <option value="">Select Category</option>
       

        <?php   
         $sql = "select * from category";
         $query=mysqli_query($con,$sql);
         while($row =mysqli_fetch_array($query)){
          ?>
    <option value="<?php  echo $row['id'] ?>"><?php  echo $row['category']; ?></option>
    <?php
         }
         ?>
       
    </select>
  </div>

  
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Description</label>
    <textarea name="description" id="" class="form-control"></textarea>
    </div>

    <div class="mb-3">
    <label for="exampleInputImage" class="form-label">Image</label>
    <input type="file" class="form-control" name="image" id="exampleInputImage">
  </div>

    <div class="d-grid gap-2">
 
 <!-- <button class="btn btn-primary" type="button">Button</button> -->
  <input type="submit" class="btn btn-danger" value="Add Product">
 
 </div> 

  
</form>
</div>

</div>
</body>
</html>
<?php
}
else{
    header('location:login.php');
}
?>
 