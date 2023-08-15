<?php 
include("functions/userfunctions.php");
include("includes/header.php");
include("includes/slider.php");


?>

<div class="py-5">
 <div class="container"><div class="row"><div class="col-md-12">
    <h2 class="common-ttle outer-gradient-text">Trending Products</h2>
   
<div class="row">
    <div class="owl-carousel">
    <hr>
<?php 

$trendingProducts=getTrendingProducts();
if(mysqli_num_rows($trendingProducts)>0){
    foreach($trendingProducts as $item){
?>    <div class="item">
<a href="product-view.php?product=<?=$item['slug'];?>">
<div class="card shadow">
<div class="card-body bg-custom-card">
<img src="uploads/<?=$item['image'];?>" alt="Products Image" height="150px" class="w-100">

<h5 class="text-center text-custom"><?=$item['name'];?></h5>
</div>
</div>
</a>
</div><?php

    }
}
?>

    <!-- <h1>Hello,User Welcome!<i class="fa fa-user"></i></h1> -->
    <!-- <button class="btn btn-primary">Testing</button> -->
  </div></div></div></div></div></div>
  <div class="py-5 text-white">
 <div class="container"><div class="row"><div class="col-md-12">
 <h2 class="common-ttle inner-gradient-text">Our blueprint
for the future</h2>
    <div class="underline mb-2"></div>
    <p>

    </p>
    <p>
    With the help of its value-creation model, XYZ Power continues to take positive strides towards consolidating its position as India’s largest integrated power company. FY20 witnessed steady progress across business lines enabled by a sound strategic plan. The business strategy is framed bearing in mind the Company’s core focus areas.
<br>
We adopt an integrated approach to cater to the evolving needs of our customers. A strategy review and planning is conducted annually, which enables effective assessment, evaluation and appraisal of our strategy and future roadmap.

We also undertake a detailed study to identify the interdependence of our business activities with external factors such as geo-political conflicts, market instability, innovation and legislative or regulatory requirements, among others.

These external factors are also considered during risk identification and strategy development. We have a programmatic approach that enables effective rollout of our strategy encompassing four key phases.
    </p>

   

    <hr>


    <!-- <h1>Hello,User Welcome!<i class="fa fa-user"></i></h1> -->
    <!-- <button class="btn btn-primary">Testing</button> -->
  </div></div></div></div>
  <div class="py-5 ">
 <div class="container"><div class="row"><div class="col-md-2">
    <h4 class="text-white">E-shop</h4>
    <div class="underline mb-2"></div>
 <a href="index.php" class="text-white">   <i class="fa fa-angle-right"></i>Home</a><br>
 <a href="cart.php" class="text-white">   <i class="fa fa-angle-right"></i>Cart</a><br>
 <a href="categories.php" class="text-white">   <i class="fa fa-angle-right"></i>Collections</a><br>
 <?php if(isset($_SESSION['auth'])){?>
 <a href="logout.php" class="text-white">   <i class="fa fa-angle-right"></i>Logout</a><br><?php }

else{?>
<a href="login.php" class="text-white">   <i class="fa fa-angle-right"></i>Login</a><br><?php }?>
</div><div class="col-md-3 text-white">

<h4>Head Office Address</h4>
<p>
    R-Building,
    Moscow,
    Russia
</p>
<a href="tel:+9199999999999"><i class="fa fa-phone mr-1"></i>+9199999999999</a><br>
<a href="mailto:xyz@gmail.com"><i class="fa fa-envelope mr-1"></i>abc@gmail.com</a>
</div>
<div class="col-md-6">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d577317.9718771391!2d37.385523499999984!3d55.582025949999974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2sMoscow%2C%20Russia!5e0!3m2!1sen!2sin!4v1685293557583!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
    <hr>


    <!-- <h1>Hello,User Welcome!<i class="fa fa-user"></i></h1> -->
    <!-- <button class="btn btn-primary">Testing</button> -->
  </div></div></div></div>
    <?php include("includes/footer.php")?>
    <script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    });
    
    </script>
   