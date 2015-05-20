<?php

//Inicia sessão
session_start();
//Liga ao sistema de bases de dados e escolhe a base de dados
mysql_connect('localhost', 'adminsmartpeople', 'smartpeople');
mysql_select_db('smartpeople');

//Consulta do utilizador
$consulta = "Select * from registos where mailsmartpeople='" . $_POST['mailsmartpeople'] . "' and passwordsmartpeople='" . $_POST['passwordsmartpeople'] . "'";
$resultado = mysql_query($consulta);

//Se o email e a password coincidirem
if (mysql_num_rows($resultado) > 0) {
    //Coloca na variável linha os dados da consulta
    $linha = mysql_fetch_array($resultado);
    //Coloca o email em sessão utilizando o array de sessões
    $_SESSION['email'] = $linha['email'];
    //Coloca o tipo de utilizador em sessão para posteriores validações com base nele
    $_SESSION['role'] = $linha['id'];
    //Redirecciona o utilizador para a página secreta
    header("location: user.php");
} else {
    //Caso as credenciais não coincidam, redirecciona para a página de login reportando o erro
    header("location: login.html?erro=1");
}
?>