<?php 
 

 include("includes/header.php");
 
 if(isset($_SESSION['auth'])){
    $_SESSION['message']="You are already logged in";
    header('Location: index.php');
    exit();
 }
 ?>
<div class="py-5">
 <div class="container"><div class="row-justify-content-center">
    <?php if(isset($_SESSION['message'])){?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Hey!</strong> <?=$_SESSION['message'];?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
unset($_SESSION['message']);
    }?>
 <div class="col-md-12">
    <div class="card custom-color text-custom">

    <div class="card-header">
        <h4>Login Form</h4>
</div>
<div class="card-body">
<form action="functions/authcode.php" method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"  name="email" class="form-control"  placeholder="Enter your Email" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
  </div>


  <button type="submit" name="login_button" class="btn custom-bg">Login</button>
</form>
</div>
  
   
 
 </div>
 </div></div>
</div></div>

 
 <?php include("includes/footer.php")?>