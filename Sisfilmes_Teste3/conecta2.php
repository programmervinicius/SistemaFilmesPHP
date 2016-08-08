<?php
//DADOS PARA CONEXÃO
$servidor   =   "localhost";   //SERVIDOR
$bd         =   "sislocadora";       //DATABASE
$usuario    =   "root";        //USUÁRIO
$senha      =   "181085";            //SENHA

//CONECTANDO
$conn    =   @mysql_connect($servidor, $usuario, $senha)
             or die("ERRO NA CONEXÃO");

//SELECIONA O DATABASE A SER UTILIZADO
$db      =   @mysql_select_db($bd, $conn)
             or die("ERRO NA SELEÇÃO DO DATABASE");
?>

