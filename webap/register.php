 <?php 
 session_start();

 include("includes/header.php");
 
 if(isset($_SESSION['auth'])){
    $_SESSION['message']="You are already logged in";
    header('Location: index.php');
    exit();
 }?>
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
    <div class="card">

    <div class="card-header">
        <h4>Registration Form</h4>
</div>
<div class="card-body">
<form action="functions/authcode.php" method="POST">
<div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter your Name">
    
</div>
<div class="mb-3">
    <label  class="form-label">Phone</label>
    <input type="number" name="phone" class="form-control" placeholder="Enter your Phone Number">
    
</div>
<div class="mb-3">
    <label  class="form-label">Country</label>
    <input type="text" name="country" class="form-control" placeholder="Enter your Country">
    
</div>
<div class="mb-3">
    <label  class="form-label">State</label>
    <input type="text" name="state" class="form-control" placeholder="Enter your State">
    
</div>
<div class="mb-3">
    <label  class="form-label">City</label>
    <input type="text" name="city" class="form-control" placeholder="Enter your City">
    
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"  name="email" class="form-control"  placeholder="Enter your Email" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
  </div>
  <div class="mb-3">
    <label class="form-label">Confirm Password</label>
    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
  </div>

  <button type="submit" name="register_button" class="btn btn-primary">Submit</button>
</form>
</div>
  
   
 
 </div>
 </div></div>
</div></div>

 
 <?php include("includes/footer.php")?>