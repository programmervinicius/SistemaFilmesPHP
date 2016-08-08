<?php
include('conecta.php');
//include('jquery.php');
include('formata.php');

echo "<meta http-equiv='Content Type' content='text/html; charset=utf-8 />";

$cod_cliente=$_POST['cod_cliente'];
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$bairro=$_POST['bairro'];
$uf=$_POST['uf'];
$cep=$_POST['cep'];
$telefone=$_POST['telefone'];
$celular=$_POST['celular'];
$dat_nasc=$_POST['dat_nasc'];
$rg=$_POST['rg'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];


include('jquery.php');


mysql_connect ($hostname, $username, $password) or die ('Erro ao tentar concetar ao banco de dados.');
mysql_select_db ($dbname);
$sql = "delete from clientes where cod_cliente=$cod_cliente";

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
echo "window.parent.location='http://localhost/Sisfilmes_Teste3/buscar2.php';";
echo "</script>";

}
?>
