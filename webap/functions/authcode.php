<?php 
session_start();
include("myfunctions.php");
include('../config/dbcon.php');
if(isset($_POST['register_button'])){
$name=mysqli_real_escape_string($con,$_POST['name']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$country=mysqli_real_escape_string($con,$_POST['country']);
$state=mysqli_real_escape_string($con,$_POST['state']);
$city=mysqli_real_escape_string($con,$_POST['city']);

$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$confirm_password=mysqli_real_escape_string($con,$_POST['confirm_password']);
$check_email_query="SELECT email from users WHERE email='$email'";
$check_email_query_run=mysqli_query($con,$check_email_query);
$check_phone_query="SELECT phone from users WHERE phone='$phone'";
$check_phone_query_run=mysqli_query($con,$check_phone_query);
if(mysqli_num_rows($check_email_query_run)>0 or mysqli_num_rows($check_phone_query_run)>0){
    $_SESSION['message']="Email/Phone already registered";
    header("Location: ../register.php");
}
else{

if($password==$confirm_password){
        //Inset user data
        $insert_query="INSERT INTO users (name,email,phone,password,country,state,city) VALUES ('$name','$email','$phone','$password','$country','$state','$city')";
        $insert_query_run=mysqli_query($con,$insert_query);
        if($insert_query_run){
            redirect("../login.php","Registered Successfully");
            // $_SESSION['message']="Registered Successfully";
            // header("Location: ../login.php");

        }
        else{
            redirect("../register.php","Something went wrong");
            // $_SESSION['message']="Something went wrong";
            // header("Location: ../register.php");
            
        }

    }       
else
 {

    redirect("../register.php","Passwords do not match");
    // $_SESSION['message']="Passwords do not match";
    // header("Location: ../register.php");
 }
}
}
else if(isset($_POST['login_button'])){
{
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);


    $login_query="SELECT * from users WHERE email='$email' AND password='$password'";
    $login_query_run=mysqli_query($con,$login_query);

    if(mysqli_num_rows( $login_query_run)>0){
        $userdata=mysqli_fetch_array($login_query_run);
        $userid=$userdata['id'];
        $username=$userdata['name'];
        $useremail=$userdata['email'];
        $role=$userdata['role'];


$_SESSION['auth']=true;
$_SESSION['auth_user']=[
    'user_id'=>$userid,
    'name'=>$username,
    'email'=>$useremail,

];
$_SESSION['role']=$role;
if($role=='admin'){
    redirect("../admin/index.php","$username welcome to dashboard");
//     $_SESSION['message']="$username welcome to dashboard";
// header('Location: ../admin/index.php');

}
else{
    redirect("../index.php","$username You Are Logged In Successfully");
// $_SESSION['message']="$username You Are Logged In Successfully";
// header('Location: ../index.php');}
}
    }
    else{
        redirect("../login.php","Invalid Credentials");
        // $_SESSION['message']="Invalid Credentials";
        // header('Location: ../login.php');
    }
}
}
?>