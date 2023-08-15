<?php 


$host="localhost:3307";
$username="udbhav";
$password="Udbhav05";
$database="ev_db";
$port="3307";
//CReating database connection
$con=mysqli_connect($host,$username,$password,$database);
if(!$con){
    die("Connection Failed".mysqli_connect_error());
}
else{
   // echo "Connected succesfully";
}
?>