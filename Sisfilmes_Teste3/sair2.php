<?php
//INICIALIZA A SESSÃO
session_start();

//DESTRÓI AS VARIÁVEIS
unset($_SESSION['id']);
unset($_SESSION['nome']);

//REDIRECIONA PARA A TELA DE LOGIN
Header("Location: index.php");
?>
~    
