<?php
include('../config/dbcon.php');
function redirect($url,$message){
 
    $_SESSION['message']=$message;
    header('Location: '.$url);
    exit();

}

function getAll($table){
    global $con;
    $query="SELECT * FROM $table";
   return $query_run=mysqli_query($con,$query);
}
function getById($table,$id){
    global $con;
    $query="SELECT * FROM $table WHERE id='$id'";
   return $query_run=mysqli_query($con,$query);
}
function getAllActive($table){
    global $con;
    $query="SELECT * FROM $table where status='1'";
   return $query_run=mysqli_query($con,$query);
}

function getUsers()
{
    global $con;
    $query="SELECT * FROM users where role='admin'";
    $query_run=mysqli_query($con,$query);
    return mysqli_num_rows($query_run);
}
function getUsersTotal()
{
    global $con;
    $query="SELECT * FROM users";
    $query_run=mysqli_query($con,$query);
    return mysqli_num_rows($query_run);
}
function getTotal(){
    global $con;
    $today=date("Y-m-d");
    echo $today;
    $query_today="SELECT SUM(total_price) from orders where DATE(created_at)='$today'";
    $query_today_run=mysqli_query($con,$query_today);
    echo $query_today_run;
    return ($query_today_run);

}
function getTotalYesterday(){
    global $con;
    $today=date('Y-m-d',strtotime("-1 days"));
    $query_today="SELECT SUM(total_price) from orders where DATE(created_at)='$today'";
    $query_today_run=mysqli_query($con,$query_today);

    return ($query_today_run);

}
?>