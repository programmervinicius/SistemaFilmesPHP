<?php

/*
 Autor: Rafael Ferreira.
 Última Atualização: 18 de junho de 2013.
 Objetivo: Valida Login do Sistema.
*/




echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";

include ("conecta2.php");


$c = $_POST['c'];
$d = $_POST['d'];

//VERIFICA
$sql=mysql_query("SELECT A.cod_usuario, A.login FROM usuarios A WHERE  A.login='$c'
                      AND A.senha='$d'") or die("ERRO NO COMANDO SQL");
//$sql=mysql_query("select * from usuarios where login='$c' and senha='$d'")or die("Erro no Comando SQL");


//LINHAS AFETADAS PELA CONSULTA
$row   =  mysql_num_rows($sql);

//VERIFICA SE RETORNOU ALGO

if($row == 0)
{
echo "<script>";
echo "alert ('Usuário não autenticado');";
echo "window.parent.location='http://localhost/Sisfilmes_Teste3/index.php';";
echo "</script>";
}


else {
     //PEGA OS DADOS
         $id   =   mysql_result($sql, 0, "cod_usuario");
         $nome =   mysql_result($sql, 0, "login");

     //INICIALIZA A SESSÃO
         session_start();

         //GRAVA AS VARIÁVEIS NA SESSÃO
         $_SESSION['id']    =   $id;
         $_SESSION['nome']  =   $nome;

         //REDIRECIONA PARA A PÁGINA QUE VAI EXIBIR OS PRODUTOS
         Header("Location: principal.php");
}//FECHA ELSE
?>
