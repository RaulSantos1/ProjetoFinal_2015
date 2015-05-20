<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query($db,"select mailsmartpeople from smartpeople where mailsmartpeople='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session=$row['mailsmartpeople'];

if(!isset($login_session))
{
header("Location: http://localhost/versaoteste1/index.html");
}
?>