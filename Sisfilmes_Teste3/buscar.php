<?php
include('verifica.php');
include('formata.php');

echo "<link rel='stylesheet' type='text/css' href='css1.php'>";

 

echo "<script>";
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8 />";
echo "</script>";

include ("conecta.php");
echo "<div align='center'>";
echo "<body>";
//echo "<body bgcolor='cbe2e2'>";
echo "<h1>Pesquisa</h1>";
echo "<br>";
echo "<table border='1'>";
echo "<tr>
 
<th bgcolor='a9d3db'>Grupo</th>
<th bgcolor='a9d3db'>Cod</th>
<th bgcolor='a9d3db'>Filme</th>
<th bgcolor='a9d3db'>Descrição</th>
<th bgcolor='a9d3db'>Tipo</th>
<th bgcolor='a9d3db'>Gênero</th>
<th bgcolor='a9d3db'>Tradução</th>
<th bgcolor='a9d3db'>Ator</th>
<th bgcolor='a9d3db'>Diretor</th>
<th bgcolor='a9d3db'>Produtora</th>
<th bgcolor='a9d3db'>Ano</th>
<th bgcolor='a9d3db'>Duração</th>
<th bgcolor='a9d3db'>Imagem</th>
<th bgcolor='a9d3db'></th>
<th bgcolor='a9d3db'></th>
</tr>";


mysql_connect ( $hostname, $username, $password ) or die ( 'Falha na conexão');
mysql_select_db ( $dbname );
//$sql= "select filmes.cod_filme, filmes.filme, filmes.descricao from filmes";
$sql = "select filmes.cod_filme, filmes.filme,filmes.descricao,filmes.ator,filmes.diretor,filmes.duracao,filmes.ano,filmes.produtora,filmes.imagem,filmes.grupo,tipos.tipo,generos.genero, traducoes.traducao from filmes,tipos,generos,traducoes where filmes.cod_tipo = tipos.cod_tipo and filmes.cod_gen = generos.cod_gen and filmes.cod_trad = traducoes.cod_trad";



$r = mysql_query ($sql);
if ($r){
while ($l = mysql_fetch_array ($r)){
$grupo = $l['grupo'];
$cod_filme = $l['cod_filme'];
$filme = $l['filme'];
$descricao = $l['descricao'];
$tipo = $l['tipo'];
$genero = $l['genero'];
$traducao = $l['traducao'];
$ator = $l['ator'];
$diretor = $l['diretor'];
$produtora = $l['produtora'];
$ano = $l['ano'];
$duracao = $l['duracao'];
$imagem = $l['imagem'];

       // echo "<table align='center'>";
        echo "<td align='center'>$grupo</td>";
        echo "<td align='center'>$cod_filme</td>";
        echo "<td align='center'>$filme</td>";
        echo "<td align='center'>$descricao</td>";
        echo "<td align='center'>$tipo</td>";
        echo "<td align='center'>$genero</td>";
        echo "<td align='center'>$traducao</td>";
        echo "<td align='center'>$ator</td>";
        echo "<td align='center'>$diretor</td>";
        echo "<td align='center'>$produtora</td>";
        echo "<td align='center'>$ano</td>";
        echo "<td align='center'>$duracao</td>";
        echo "<td align ='center'><img src='fotos/".$imagem."' width='112' height='170'/></td>";
        






        echo "<td align='center'><a href='alterar.php?cod_filme=$cod_filme'><img src='/Sistema2/Figuras Sistema/1.JPG' border ='0' width='25' height='25' ></a></td>";
        echo "<td align='center'><a href='excluir.php?cod_filme=$cod_filme'><img src='/Sistema2/Figuras Sistema/12.JPG' border ='0' width='25' height='25' ></a></td>";
        echo "</tr>";
        }
}


if(empty ($cod_filme)){


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
<input name='Voltar' type='button' value= 'Voltar' onclick="window.location='pesquisar.php'">
