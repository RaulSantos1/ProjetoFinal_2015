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
        <link rel="stylesheet" type="text/javascript" href="LOGIN/login.php">
        <link rel="stylesheet" type="text/javascript" href="LOGIN/registarUtilizador.php">
        <link rel="stylesheet" type="text/javascript" href="LOGIN/connection.php">
    </head>
    <body>
        <div class="principal">
            <div class="pagina">
                <div class="cabecalho">
                    <h1>Cake Design</h1>
                </div>
                <div class="menutopo">
                    <!--CONTEUDO 1-->
                    <ul>
                        <li style="background: transparent none repeat scroll 0% 50%;
                            -moz-background-clip: initial; -moz-background-origin: initial;
                            -moz-background-inline-policy: initial; padding-left: 0px;">
                            <a href="index.php">Utilizadores</a></li>
                        <li><a href="noticias.php">Notícias</a></li>
                        <li><a href="galeria.php">Galeria</a></li>
                        <li><a href="informacoes.php">Informações da página</a></li>
                        <li><a href="contactos.php">Contactos</a></li>
                    </ul>
                </div>
                <div class="conteudo">
                    <div class="painel-esquerda">
                        <div class="painel-esquerda-in">
                            <h2 class="title">Listagem de Utilizadores</h2>
                            <!--CONTEUDO 2-->
                            <br />


                            <a href="index.html">Registar novos utilizadores</a><br/><br/>
                            <?php
                            echo "<table width='80%' border=0>";

                            echo "<tr bgcolor='#CCCCCC'>";
                            echo "<td>Userame</td>";
                            echo "<td>Senha</td>";
                            echo "<td>Email</td>";
                            echo "<td>Update</td>";
                            echo "</tr>";

                            while ($res = mysql_fetch_array($result)) {

                                echo "<tr>";
                                echo "<td>" . $res['username'] . "</td>";
                                echo "<td>" . $res['senha'] . "</td>";
                                echo "<td>" . $res['email'] . "</td>";
                                echo "<td><a href=\"editarUtilizador.php?ID=$res[ID]\">Editar</a> | <a href=\"eliminarUtilizador.php?ID=$res[ID]\">Delete</a></td>";
                            }
                            echo "</table>";
                            ?>
                        </div>
                    </div>
                    <div class="painel-direita">
                        <div class="linha-direita1">
                            <?php
                            $username_cookie = $_COOKIE['username'];
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
                            <hr/> 
                            <br>Madalena Garcia
                            <!--<p>00 / 00Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>-->
                            <p>Email:<a href="mailto:cakedesignmg@gmail.com">cakedesignmg@gmail.com</p>
                            <!--<p>Fax:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 000-000-0000</p>
                            <p>Phone: 000-000-0000 /<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;000-000-0000</p>-->
                        </div>
                        <div class="linha-direita2">

                        </div>
                    </div>
                </div>
                <div class="rodape">
                    <!--CONTEUDO 4-->
                    <p>&copy; Copyright 2014. Designed by Madalena Garcia
                    </p>
                    <ul>
                        <li style="border-left: medium none;"><a href="index.php">Utilizadores</a></li>
                        <li><a href="noticias.php">Notícias</a></li>
                        <li><a href="galeria.php">Galeria</a></li>
                        <li><a href="informacoes.php">Informações da página</a></li>
                        <li><a href="contactos.php">Contactos</a></li>
                    </ul>
                </div>
            </div>
        </div>


    </body></html>