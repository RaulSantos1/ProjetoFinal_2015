<?php

//Aceder �s sess�es activas
session_start();
//Termina a sess�o activa, destruindo-a juntamente com todas as vari�veis de sess�o definidas
session_destroy();
//Redirecciona o utilizador para a p�gina de autentica��o
header('Location: index.html');

?>