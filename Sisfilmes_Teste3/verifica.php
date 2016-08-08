<?php

//echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
//header<Content-Type: text/html; charset=ISO-8859-1',true)
echo "<link rel='shortcut icon' href='imagem/a.gif' type='image/x-icon' />";



//INICIALIZA A SESSÃO
session_start();
/*
echo "<table border='1'bordercolor='black'>";
echo "<tr>";
echo "<td><font color='red'>Conectado:" .$_SESSION['nome'];
echo "</td>";
echo "</font>";
echo "</tr>";
echo "</table>";
*/
//echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
echo "<font size='3' color='red'>Sisfilmes-usu&aacute;rio:".$_SESSION['nome'];
echo "</font>";
echo "<hr width='150'align='left'>";


//SE NÃO TIVER VARIÁVEIS REGISTRADAS
//RETORNA PARA A TELA DE LOGIN
if( (!isset($_SESSION['id'])) AND (!isset($_SESSION['nome'])) )
   

Header("Location: index.php");
?>
