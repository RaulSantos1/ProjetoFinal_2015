<?php

$connect = mysql_connect('localhost', 'adminsmartpeople', 'smartpeople');
$db = mysql_select_db('smartpeople');
$mailsmartpeople = $_POST['mailsmartpeople'];
$entrar = $_POST['entrar'];
$passwordsmartpeople = $_POST['passwordsmartpeople'];

if (isset($entrar)) {
    $verifica = mysql_query("SELECT * FROM registos WHERE mailsmartpeople = '$mailsmartpeople' AND passwordsmartpeople = '$passwordsmartpeople'") or die("erro ao selecionar");

    if (mysql_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>
	alert('Login e/ou senha incorretos');window.location.href='index.html';
</script>";
        die();
    } else {
        setcookie("mailsmartpeople", $mailsmartpeople);
        header("Location: user.php");
    }
}
?>