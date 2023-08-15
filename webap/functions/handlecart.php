<?php

include('../config/dbcon.php');
include('authcode.php');

if(isset($_SESSION['auth'])){
if(isset($_POST['scope'])){
$scope=$_POST['scope'];
switch($scope){

case "add":
    $prod_id=$_POST['prod_id'];
    $prod_qty=$_POST['prod_qty'];
    
    $user_id=$_SESSION['auth_user']['user_id'];
    $chk_existing_cart="SELECT * from carts where prod_id='$prod_id' AND user_id='$user_id'";
    $chk_existing_cart_run=mysqli_query($con,$chk_existing_cart);
    if(mysqli_num_rows($chk_existing_cart_run)){
echo 301;
    }
    else{
        $insert_query="INSERT into carts(user_id,prod_id,prod_qty) VALUES ('$user_id','$prod_id','$prod_qty')";
        $insert_query_run=mysqli_query($con,$insert_query);
        if($insert_query_run){
            
            echo 201;
        }
        else{
            echo 500;
        }

    }

    
 
     break;
case "update":

    $prod_id=$_POST['prod_id'];
    //echo $prod_id;
    $prod_qty=$_POST['prod_qty'];
    
    $user_id=$_SESSION['auth_user']['user_id'];
    $chk_existing_cart="SELECT * from carts where prod_id='$prod_id' AND user_id='$user_id'";
    $chk_existing_cart_run=mysqli_query($con,$chk_existing_cart);
    if(mysqli_num_rows($chk_existing_cart_run)){
        $update_query="UPDATE carts SET prod_qty='$prod_qty' where prod_id='$prod_id' and user_id='$user_id'";
    
        $update_query_run=mysqli_query($con,$update_query);
        if($update_query_run){
            echo 200;
        }
        else{
            echo 500;
        }
            }

    else{
        echo 500;
    }
    break;
case "delete":
    $cart_id=$_POST['cart_id'];
    //echo $prod_id;
   
    
    $user_id=$_SESSION['auth_user']['user_id'];
    $chk_existing_cart="SELECT * from carts where id='$cart_id' AND user_id='$user_id'";
    $chk_existing_cart_run=mysqli_query($con,$chk_existing_cart);
    if(mysqli_num_rows($chk_existing_cart_run)){
        $update_query="DELETE FROM carts where id='$cart_id'";
    
        $update_query_run=mysqli_query($con,$update_query);
        if($update_query_run){
            echo 202;
        }
        else{
            echo 500;
        }
            }

    else{
        echo 500;
    }
    break;

default:
    echo 500;
    

}
}

}
else{
    echo 401;
}

?>