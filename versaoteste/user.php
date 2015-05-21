<?php
// incluir o arquivo de ligação com a base de dados
$connect = mysql_connect('localhost', 'adminsmartpeople', 'smartpeople');
$db = mysql_select_db('smartpeople');

// busca de dados em ordem decrescente (entrada mais recente primeiro)
$result = mysql_query("SELECT * FROM registos ORDER BY id DESC");
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SmartPeople - user</title>
        <link rel="index" type="text/javascript" href="versaoteste1/index.php">
        <link rel="stylesheet" type="text/javascript" href="versaoteste1/login.php">

    </head>
    <body>
        <?php
        //Se existir autenticação        
            $username_cookie = $_SESSION['mailsmartpeople'];
            if (isset($username_cookie)==1) {
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