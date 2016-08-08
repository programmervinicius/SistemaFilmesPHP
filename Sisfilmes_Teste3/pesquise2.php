<?php
include('jquery.php');

//echo "<link rel='stylesheet' type='text/css' href='css.php'>";


echo "<script>";
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8 />";
echo "</script>";

include ("conecta.php");
echo "<div align='center'>";
echo "<body>";
//echo "<body bgcolor='cbe2e2'>";
echo "<h1>Busca</h1>";
echo "<br>";
echo "<table border='1'>";
echo "<tr>
<th bgcolor='a9d3db'>Codigo</th>
<th bgcolor='a9d3db'>Nome</th>
<th bgcolor='a9d3db'>Endereço</th>
<th bgcolor='a9d3db'>Bairro</th>
<th bgcolor='a9d3db'>Uf</th>
<th bgcolor='a9d3db'>Cep</th>
<th bgcolor='a9d3db'>Telefone</th>
<th bgcolor='a9d3db'>Celular</th>
<th bgcolor='a9d3db'>Data Nasc.</th>
<th bgcolor='a9d3db'>Rg</th>
<th bgcolor='a9d3db'>Cpf</th>
<th bgcolor='a9d3db'>Email</th>
<th bgcolor='a9d3db'></th>
<th bgcolor='a9d3db'></th>
<tr>";


$escolha=$_POST['escolha'];
$campo=$_POST['campo'];

mysql_connect ( $hostname, $username, $password ) or die ( 'Falha na conexão');
mysql_select_db ( $dbname );

if ($escolha == "todos"){
	echo "<script>";
        echo "window.parent.location='http://localhost/Sisfilmes_Teste3/buscar2.php';";
        echo "</script>";

}else{
	$sql= "select * from clientes where $escolha like '%$campo%'";

}
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



        echo"<td align='center'><a href='alterar2.php?cod_filme=$cod_cliente'><img src='/Sistema2/Figuras Sistema/1.JPG' border ='0' width='25' height='25' ></a></td>";
        echo "<td align='center'><a href='excluir2.php?cod_filme=$cod_cliente'><img src='/Sistema2/Figuras Sistema/12.JPG' border ='0' width='25' height='25' ></a></td>";
        echo "</tr>";

}
}

//if($l==$cod_filme){
if(empty ($cod_cliente)){


echo "<script>";
echo "alert('Dados não encontrados')";
echo "</script>";

echo "<script>";
echo "window.parent.location='http://localhost/Sisfilmes_Teste3/pesquisar3.php';";
echo "</script>";

}




?>
</table>
<br>
<input name='Voltar' type='button' value= 'Voltar' onclick="window.location='pesquisar3.php'">
