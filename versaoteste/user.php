<!DOCTYPE html>
<html>
    <head>
        <?php
        //Corrige problema dos acentos e caracteres especiais 
        header("Content-Type: text/html; charset=iso-8859-1", true);
        ?>
        <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="bootstrap/assets/ico/favicon.ico">
        <title>In�cio</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="bootstrap/docs/examples/dashboard/dashboard.css" rel="stylesheet">
    </head>
    <body>
        <?php
        //Inicia sess�o
        session_start();
        //Liga ao sistema de bases de dados e escolhe a base de dados
        mysql_connect('localhost', 'adminsmartpeople', 'smartpeople');
        mysql_select_db('smartpeople');

        //Se existir autentica��o
        if (isset($_SESSION['mailsmartpeople']) and $_SESSION['id'] == 2) {
            echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';
            echo '<h1 class="page-header">In�cio</h1>';
            echo ' Ol�, ' . $_SESSION['mailsmartpeople'] . '<br/>';
            echo '<a href="logout.php"> Logout</a>';
            echo '</div>';           
        } else {
            //Caso n�o esteja autenticado
            echo ' Ol�, ' . $_SESSION['mailsmartpeople'] . '<br/>';
        }
        ?>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>