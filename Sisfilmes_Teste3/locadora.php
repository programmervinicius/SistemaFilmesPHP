<html>
<head>
<title>locadora.php</title>
</head>

<body align="center">
<br>
<br>
<br>
<h1>Locadora</h1>
<hr width="600">
<table align="center">
<tr>
<form name="locadora" method="GET" action="locadora.php">
<td>Código Filme:<input name="cod_filme" type="text" size="5" value=""></td>
</tr>
<tr><td><input name="submit" type="submit" value="Adicionar"/></td></tr>
</form>
</table>
<hr width="600">
</body>
</html>
             

<?php
include('formata.php');
include ('conecta.php');

$cod_filme = $_GET['cod_filme'];


echo "<table border='1'align='center'>";
echo "<tr>
<th bgcolor='a9d3db'>Codigo</th>
<th bgcolor='a9d3db'>Filme</th>
<th bgcolor='a9d3db'>Descrição</th>
<th bgcolor='a9d3db'>Tipo Filme</th>
<th bgcolor='a9d3db'>Gênero</th>
<th bgcolor='a9d3db'>Tipo</th>
<th bgcolor='a9d3db'>Ator</th>
<th bgcolor='a9d3db'>Diretor</th>
<th bgcolor='a9d3db'>Produtora</th>
<th bgcolor='a9d3db'>Ano</th>
<th bgcolor='a9d3db'>Duração</th>
<th bgcolor='a9d3db'>Imagem</th>
<tr>";


mysql_connect( $hostname, $username, $password ) or die (' Erro ao tentar conectar ao banco de dados. ');
mysql_select_db( $dbname );
$sql ="select * from filmes where cod_filme=$cod_filme";

$r = mysql_query( $sql );
if ($r){
while( $l = mysql_fetch_array( $r ) )
{

$filme = $l['filme'];
$descricao = $l['descricao'];
$tip = $l['tip'];
$genero = $l['genero'];
$tipo = $l['tipo'];
$ator = $l['ator'];
$diretor = $l['diretor'];
$produtora = $l['produtora'];
$ano = $l['ano'];
$duracao = $l['duracao'];
$imagem=$l['imagem'];

        echo "<td>$cod_filme</td>";
        echo "<td>$filme</td>";
        echo "<td>$descricao</td>";
        echo "<td>$tip</td>";
        echo "<td>$genero</td>";
        echo "<td>$tipo</td>";
        echo "<td>$ator</td>";
        echo "<td>$diretor</td>";
        echo "<td>$produtora</td>";
        echo "<td>$ano</td>";
        echo "<td>$duracao</td>";
        echo "<td align ='center'><img src='fotos/".$imagem."'/></td>";


}
}
?>
