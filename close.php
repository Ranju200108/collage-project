<?php
session_start();

if(isset($_SESSION['user'])){
    include "config.php";

$email = $_SESSION['user'];
$sql = "Select * from signup where email = '$email' ";

$query= mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$uid = $row['id'];


$id = $_GET['id'];

$sql = "delete from cart where id ='$id' and uid = '$uid'";
$query=mysqli_query($con,$sql);

if($query){
    ?>
    <script>
    alert("success");
    window.location.href = "viewcard.php";
  </script>
  <?php
}
else{
    echo "error";
}
}
?>


