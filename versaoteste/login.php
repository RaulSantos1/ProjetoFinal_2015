<?php

//Inicia sess�o
session_start();
//Liga ao sistema de bases de dados e escolhe a base de dados
mysql_connect('localhost', 'adminsmartpeople', 'smartpeople');
mysql_select_db('smartpeople');

//Consulta do utilizador
$consulta = "Select * from registos where mailsmartpeople='" . $_POST['mailsmartpeople'] . "' and passwordsmartpeople='" . $_POST['passwordsmartpeople'] . "'";
$resultado = mysql_query($consulta);

//Se o email e a password coincidirem
if (mysql_num_rows($resultado) > 0) {
    //Coloca na vari�vel linha os dados da consulta
    $linha = mysql_fetch_array($resultado);
    //Coloca o email em sess�o utilizando o array de sess�es
    $_SESSION['email'] = $linha['email'];
    //Coloca o tipo de utilizador em sess�o para posteriores valida��es com base nele
    $_SESSION['role'] = $linha['id'];
    //Redirecciona o utilizador para a p�gina secreta
    header("location: user.php");
} else {
    //Caso as credenciais n�o coincidam, redirecciona para a p�gina de login reportando o erro
    header("location: login.html?erro=1");
}
?>