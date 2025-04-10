<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
     <link rel="stylesheet" href="style.css">
    <title>signing</title>
    <style>
        body {
         font-family: 'Arial', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0;
}
       
    </style>
</head>
<body>
  <?php
    include "navbar.php";
   ?>
    <form>
        <h1>Sign up</h1>
   <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputemail6" class="col-form-label">Email</label>
  </div>
  <div class="col-auto">
    <input type="email" id="inputemail6" class="form-control" aria-describedby="emailHelpInline">
  </div>
  
  </div>
   <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
   
  </div>
  
  </div>
  <button type="button" class="btn btn-primary"> Login</button>
  <button type="button" class="btn btn-primary">Login with Facebook</button>
 <div class="container"></div>
 <h6>Don't have an account! signup here.</h6>
</form>

</body>
</html>