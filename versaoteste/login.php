<?php

session_start();//session starts here

include("./db_conection.php");

if (isset($_POST['entrar'])) {
    $mailsmartpeople=$_POST['mailsmartpeople'];
    $passwordsmartpeople=$_POST['passwordsmartpeople'];

    $check_user="select * from registos WHERE mailsmartpeople='$mailsmartpeople' AND passwordsmartpeople='$passwordsmartpeople'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('user.php','_self')</script>";

        $_SESSION['mailsmartpeople']=$mailsmartpeople;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>