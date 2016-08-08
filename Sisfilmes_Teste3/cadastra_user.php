<?php

include ("conecta.php");
include("jquery.php");

$login=$_POST['login'];
$senha=$_POST['senha'];




mysql_connect ( $hostname, $username, $password) or die ('Conexao não executada');
mysql_select_db ($dbname);
$sql="INSERT INTO usuarios (login, senha) values ('$login','$senha')";

$r=mysql_query($sql);
if (!$sql){
echo "Ocorreu algum erro, dados não inseridos";
}
else
{
echo "<script>";
echo "alert ('Dados inseridos com sucesso')";
echo "</script>";

echo "<script>";
echo "window.parent.location='http://localhost/Sisfilmes_Teste3/user.php';";
echo "</script>";

}
?>
