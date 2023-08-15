<?php
include('config/dbcon.php');
function redirect($url,$message){
 
    $_SESSION['message']=$message;
    header('Location: '.$url);
    exit();

}

function getIdActive($table,$slug){
    global $con;
    $query="SELECT * FROM $table WHERE slug='$slug' and status='1'";
   return $query_run=mysqli_query($con,$query);
}

function getAllActive($table){
    global $con;
    $query="SELECT * FROM $table where status='1'";
   return $query_run=mysqli_query($con,$query);
}
function getProdByCategory($category_id){
    global $con;
    $query="SELECT * FROM products where category_id='$category_id' and status='1'";
   return $query_run=mysqli_query($con,$query);
}

function getTrendingProducts(){
    global $con;
    $query="SELECT * FROM products where trending='1' and status='1'";
   return $query_run=mysqli_query($con,$query);


}
function getCartItems(){
    global $con;
    $userId=$_SESSION['auth_user']['user_id'];
$query="SELECT c.id as cid ,c.prod_id,p.id as pid,p.name,p.image,p.s_cost,c.prod_qty from carts c,products p WHERE c.prod_id=p.id AND c.user_id='$userId' ORDER BY c.id DESC";
$query_run=mysqli_query($con,$query);
return $query_run;

}
?>