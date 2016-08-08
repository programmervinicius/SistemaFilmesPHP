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
echo "<h1>Relatório Clientes</h1>";
echo "<br>";
echo "<table border='2'>";
echo "<tr>
<th bgcolor='a9d3db'>Codigo</th>
<th bgcolor='a9d3db'>Nome</th>
<th bgcolor='a9d3db'>Endereço</th>
<th bgcolor='a9d3db'>Bairro</th>
<th bgcolor='a9d3db'>Uf</th>
<th bgcolor='a9d3db'>Cep</th>
<th bgcolor='a9d3db'>Telefone</th>
<th bgcolor='a9d3db'>Celular</th>
<th bgcolor='a9d3db'>Data Nasc</th>
<th bgcolor='a9d3db'>Rg</th>
<th bgcolor='a9d3db'>Cpf</th>
<th bgcolor='a9d3db'>Email</th>
</tr>";


mysql_connect ( $hostname, $username, $password ) or die ( 'Falha na conexão');
mysql_select_db ( $dbname );
$sql= "Select * from clientes order by cod_cliente";
$r = mysql_query ($sql);
if ($r){
while ($l = mysql_fetch_array ($r)){
$cod_cliente = $l['cod_cliente'];
$nome = $l['nome'];
$endereco = $l['endereco'];
$bairro = $l['bairro'];
$uf = $l['uf'];
$cep = $l['cep'];
$telefone = $l['telefone'];
$celular = $l['celular'];
$dat_nasc = $l['dat_nasc'];
$rg = $l['rg'];
$cpf = $l['cpf'];
$email = $l['email'];


        echo "<td>$cod_cliente</td>";
        echo "<td>$nome</td>";
        echo "<td>$endereco</td>";
        echo "<td>$bairro</td>";
        echo "<td>$uf</td>";
        echo "<td>$cep</td>";
        echo "<td>$telefone</td>";
        echo "<td>$celular</td>";
        echo "<td>$dat_nasc</td>";
        echo "<td>$rg</td>";
        echo "<td>$cpf</td>";
        echo "<td>$email</td>";
        echo "</tr>";


       } 
}


//if($l==$cod_filme){
if(empty ($cod_cliente)){

echo "<script>";
echo "alert('Não há dados cadastrados')";
echo "</script>";

echo "<script>";
echo "window.parent.location='http://localhost/Sisfilmes_Teste3/principal.php';";
echo "</script>";

}





?>
</table>
<br>
<input name='Voltar' type='button' value= 'Voltar' onClick="JavaScript:window.location='relatorio_escolha.php'">

