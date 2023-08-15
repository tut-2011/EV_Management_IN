<?php
include("../functions/myfunctions.php");
if(isset($_SESSION['auth'])){
    if($_SESSION['role']!="admin"){
       // echo $_SESSION['role'];
      redirect("../index.php","You are not authorized to access this page");
       // $_SESSION['message']="You are not authorized to access this page";
       // header('Location: ../index.php');
        // $_SESSION['message']="You are already logged in";
        // header('Location: index.php');
      //  exit();
        
    
    }
    }
    
    else{

        redirect("../login.php","Login To Continue");
        
    }

    ?>