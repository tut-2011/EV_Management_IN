<?php 

session_start();
include('../config/dbcon.php');

if(isset($_SESSION['auth'])){
if(isset($_POST['placeOrderBtn'])){
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$pincode=$_POST['pincode'];
$phone=$_POST['phone'];

$address=mysqli_real_escape_string($con,$_POST['address']);
if($name=="" || $email=="" || $phone=="" || $address=="" || $pincode==""){

    $_SESSION['message']="All Fields Are Mandatory";
    header('Location: ../checkout.php');
    exit(0);



    
}

$totalprice=0;
$user_id=$_SESSION['auth_user']['user_id'];
$query="SELECT c.id as cid ,c.prod_id,p.id as pid,p.name,p.image,p.s_cost,c.prod_qty from carts c,products p WHERE c.prod_id=p.id AND c.user_id='$user_id' ORDER BY c.id DESC";
$query_run=mysqli_query($con,$query);
foreach ($query_run as $citem){
$totalprice+=$citem['s_cost']*$citem['prod_qty'];

}

$payment_mode=$_POST['payment_mode'];
$payment_id=$user_id.rand(111,999);

$tracking_no=$name.rand(1111,9999).substr($phone,2);

$insert_query="INSERT into orders (id,user_id,name,email,phone,address,pincode,total_price,payment_mode,payment_id) VALUES('$tracking_no','$user_id','$name','$email','$phone','$address','$pincode','$totalprice','$payment_mode','$payment_id')";

$insert_query_run=mysqli_query($con,$insert_query);
if($insert_query_run){
   
    $_SESSION['message']=$order_id;
    foreach($query_run as $citem){
        $order_id=$tracking_no;
        $prod_id=$citem['prod_id'];
        $prod_qty=$citem['prod_qty'];
        $s_cost=$citem['s_cost'];
    $insert_items_query="INSERT into order_items (order_id,prod_id,qty,price) VALUES ('$order_id','$prod_id','$prod_qty','$s_cost')";
    $insert_items_query_run=mysqli_query($con,$insert_items_query);
    //echo $insert_items_query_run;

}
$delete_query="DELETE FROM carts where user_id='$user_id'";
$delete_query_run=mysqli_query($con,$delete_query);
$_SESSION['message']="Order Placed Successfully";
header("Location: ../my-orders.php");
die();

}


}}
else{
echo "Not set Auth";
    header("Location: ../index.php");
}

?>