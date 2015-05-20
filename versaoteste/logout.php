<?php

//Aceder рs sessѕes activas
session_start();
//Termina a sessуo activa, destruindo-a juntamente com todas as variсveis de sessуo definidas
session_destroy();
//Redirecciona o utilizador para a pсgina de autenticaчуo
header('Location: index.html');

?>