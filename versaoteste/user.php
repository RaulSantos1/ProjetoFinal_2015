<?php
// incluir o arquivo de ligação com a base de dados
include_once("connection.php");

// busca de dados em ordem decrescente (entrada mais recente primeiro)
$result = mysql_query("SELECT * FROM utilizadores ORDER BY id DESC");
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cake Design</title>
        <link rel="stylesheet" type="text/css" href="css/trabalho_final.css">
        <link rel="icon" type="image/png" href="images/logotipo.png"/>
        <link rel="index" type="text/javascript" href="LOGIN/index.php">
        <link rel="stylesheet" type="text/javascript" href="versaoteste1/login.php">

    </head>
    <body>
        <?php
        $username_cookie = $_COOKIE['mailsmartpeople'];
        if (isset($username_cookie)) {
            echo"<b>Bem-Vindo</b>, $username_cookie <br>";
            echo"Estas informações <font color='red'>PODEM</font> ser visualizadas por si";
            echo '<br><a href="logout.php"> Logout</a>';
        } else {
            echo"Bem-Vindo, convidado <br>";
            echo"Estas informações <font color='red'>NÃO PODEM</font> ser acedidas por si";
            echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
        }
        ?>


    </body></html>