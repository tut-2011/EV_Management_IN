<?php 
include("functions/userfunctions.php");
include("includes/header.php");
include("authenticate.php");
?>
<div class="py-3 custom-color">
    <div class="container">
        <h5 class="text-white"><a class="text-white" href="index.php">Home/</a><a class="text-white" href="checkout.php">Checkout</a></h5>
    </div>
</div>
<div class="py-5">
<div class="card custom-color card-body shadow">
 <div class="container">
    <form action="functions/placeorder.php" method="POST">
    <div class="card-body">
<div class="row">
    
 <div class="col-md-7 text-custom">
<h5>Basic Details</h5>
<hr>
<div class="row">
    <div class="col-md-6 mb-3">
        <label class="fw-bold">Name</label>
        <input type="text" name="name" required placeholder="Enter your full name" class="form-control">

    </div>
    <div class="col-md-6 mb-3">
        <label class="fw-bold">Phone</label>
        <input type="number" name="phone" required placeholder="Enter your Phone Number" class="form-control">

    </div>
    <div class="col-md-6 mb-3">
        <label class="fw-bold">Email</label>
        <input type="email" name="email" required placeholder="Enter your Email" class="form-control">

    </div>
    <div class="col-md-6 mb-3">
        <label class="fw-bold">Pin Code</label>
        <input type="number" name="pincode" required placeholder="Enter your Pincode" class="form-control">

    </div>
    <div class="col-md-12 mb-3">
        <label class="fw-bold">Address</label>
        <textarea name="address" rows="5" required class="form-control"></textarea>

    </div>
</div>
 </div>
 <div class="col-md-5 text-custom">
        
<h5>Order Details</h5><hr>
 <div class="row align-items-center">

<div class="mycart"> 

    <?php $items=getCartItems();
$totalprice=0;
    foreach($items as $citem){
            ?>
            <div class="card custom-color shadow-sm mt-3 text-custom">
<div class="row align-items-center">

<div class="col-md-2">
<img src="uploads/<?=$citem['image']?>" alt="Product Image" height="80px" width="80px">
    </div>
    <div class="col-md-3 ml-3">
        <h6><?=$citem['name']?></h6>

    </div>
   
    <div class="col-md-3">
        <h6>$<?=$citem['s_cost']?></h6>
    </div>
    <div class="col-md-3">
        <h6><?=$citem['prod_qty']?></h6>

    </div>
 

</div>

    </div>

            <?php
            $totalprice+=$citem['s_cost']*$citem['prod_qty'];

    }?>
    <hr>
<h5 class="fw-bold">Total Price:<span class="float-end">$<?=$totalprice?></span></h5>
<div class="">
    <input type="hidden" name="payment_mode" value="1">
    <button type="submit" name="placeOrderBtn" class="btn btn-primary w-100" >Confirm And Place Order</button>
</div>
</div>

    </div></div></div></div></form></div></div></div>
    <?php include("includes/footer.php")?>
   