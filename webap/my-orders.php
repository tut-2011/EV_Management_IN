<?php 
include("functions/userfunctions.php");
include("includes/header.php");
include("authenticate.php");
?>
<div class="py-3 bg-primary">
    <div class="container">
        <h5 class="text-white"><a class="text-white" href="index.php">Home/</a><a class="text-white" href="cart.php">My Orders</a></h5>
    </div>
</div>
<div class="py-5">
<div class="card card-body shadow">
 <div class="container"><div class="row"><div class="col-md-12">
 <div class="row align-items-center">

<div class="col-md-5">
<h5 class="fw-bold">Product</h5>
    </div>
    <div class="col-md-3">
    <h5 class="fw-bold">Price</h5>

    </div>
    <div class="col-md-2">
    <h5 class="fw-bold">Quantity</h5>

    </div>
    <div class="col-md-2">

<h5 class="fw-bold">Remove</h5>
</div>
</div>
<div class="mycart"> 

    <?php $items=getCartItems();

    foreach($items as $citem){
            ?>
            <div class="card shadow-sm mt-3">
<div class="row align-items-center">

<div class="col-md-2">
<img src="uploads/<?=$citem['image']?>" alt="Product Image" height="80px" width="80px">
    </div>
    <div class="col-md-3">
        <h5><?=$citem['name']?></h5>

    </div>
    <div class="col-md-3">
        <h5>$<?=$citem['s_cost']?></h5>
    </div>
    <div class="col-md-2">
    <div class="container">
        <input type="hidden" class="prodId" value="<?=$citem['prod_id']?>">
<input type="button" onclick="decrementValueCustom(<?=$citem['prod_id']?>)" class="updateQty product_data" value="-" />
<input type="text" disabled name="quantity" class="input-qty" value="<?=$citem['prod_qty']?>" maxlength="2" max="10" size="1" id="number_<?=$citem['prod_id']?>" />
<input type="button" onclick="incrementValueCustom(<?=$citem['prod_id']?>)" class="updateQty product_data" value="+" />
</div>

    </div>
    <div class="col-md-2">

<button class="btn btn-danger deleteItem" value="<?=$citem['cid']?>"><i class="fa fa-trash me-2">Remove</i></button>
</div>
</div>

    </div>
    

            <?php

    }?>
  
</div>
<div class="float-end">


</div>
    </div></div></div></div></div></div>
    <?php include("includes/footer.php")?>
   