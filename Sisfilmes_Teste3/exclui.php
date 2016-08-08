<?php
include('conecta.php');
//include('jquery.php');
include('formata.php');

echo "<meta http-equiv='Content Type' content='text/html; charset=utf-8 />";

$filme= $_POST['filme'];
$cod_filme=$_POST['cod_filme'];
$descricao=$_POST['descricao'];
$tip=$_POST['tip'];
$genero=$_POST['genero'];
$tipo=$_POST['tipo'];
$ator=$_POST['ator'];
$diretor=$_POST['diretor'];
$produtora=$_POST['produtora'];
$ano=$_POST['ano'];
$duracao=$_POST['duracao'];
$grupo=$_POST['grupo'];
$imagem =$_POST['imagem'];




$origem= "/var/www/Sisfilmes_Teste3/fotos";

$deleta = unlink("$origem/$imagem");

if ($deleta)
{
  echo ("Erro ao deletar $imagem");
}
else
{
  echo ("Deletado $imagem com sucesso! $deleta");
}



include('jquery.php');


mysql_connect ($hostname, $username, $password) or die ('Erro ao tentar concetar ao banco de dados.');
mysql_select_db ($dbname);
$sql = "delete from filmes where cod_filme=$cod_filme";

$r=mysql_query($sql);
if (!$sql){
echo "Ocorreu algum erro, dados não excluídos";
}
else
{
echo "<script>";
echo "alert ('Dados excluídos com sucesso')";
echo "</script>";

echo "<script>";
echo "window.parent.location='http://localhost/Sisfilmes_Teste3/buscar.php';";
echo "</script>";

}
?>
