<?php
include('verifica.php');
include('formata.php');
include('jquery.php');

//echo "<link rel='stylesheet' type='text/css' href='css.php'>";


echo "<script>";
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8 />";
echo "</script>";

include ("conecta.php");
echo "<div align='center'>";
echo "<body>";
//echo "<body bgcolor='cbe2e2'>";
echo "<h1>Relatório Usuários</h1>";
echo "<br>";
echo "<table border='2'>";
echo "<tr>
<th bgcolor='a9d3db'>Codigo</th>
<th bgcolor='a9d3db'>Login</th>
<th bgcolor='a9d3db'>Senha</th>
</tr>";


mysql_connect ( $hostname, $username, $password ) or die ( 'Falha na conexão');
mysql_select_db ( $dbname );
$sql= "Select * from usuarios order by cod_usuario;";
$r = mysql_query ($sql);
if ($r){
while ($l = mysql_fetch_array ($r)){
$cod_usuario = $l['cod_usuario'];
$login = $l['login'];
$senha = $l['senha'];


        echo "<td>$cod_usuario</td>";
        echo "<td>$login</td>";
        echo "<td>$senha</td>";
        echo "</tr>";


       } 
}


//if($l==$cod_filme){
if(empty ($cod_usuario)){

echo "<script>";
echo "alert('Não há dados cadastrados')";
echo "</script>";

echo "<script>";
echo "window.parent.location='http://localhost/Sisfilmes_Teste2/principal.php';";
echo "</script>";

}





?>
</table>
<br>
<input name='Voltar' type='button' value= 'Voltar' onClick="JavaScript:window.location='relatorio_escolha.php'">

