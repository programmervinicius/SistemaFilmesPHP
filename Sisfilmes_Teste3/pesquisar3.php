<?php
include('verifica.php');

?>


<html>
<head>
<title>pesquisar3.php</title>
<meta http-equiv='Content-Type' content='text/html' charset='utf-8' />

<link rel="stylesheet" type="text/css" href="css1.php">


</head>
<body>
<!--<body bgcolor="bce2e2">-->


<script type="text/javascript">
function valida(){
if(document.pesquisa.campo.value==""){
alert ("Campo de pesquisa obrigatório");
return false;
}else
return true;
}
</script>

<script type="text/javascript">
function valida2(){
if(document.getElementById("todos").value == "todos"){
document.pesquisa.campo.disable=false;

alert ("campo");
return false;
}else
return true;
}

}

</script>

<script>
function Executa() {
document.pesquisa.campo.disabled= false;
}
</script>


<script>

function teste(obj)
{
     if(obj.options[obj.selectedIndex].value == 'todos')
        document.forms[0].campo.disabled = true;
     else 
        document.forms[0].campo.disabled = false;
}
</script>




<br>
<br>
<br>
<hr width="600">
<table align="center">
<tr><center><h1>Pesquisar Clientes</center></h1></tr>
<form name="pesquisa" method="post" action="pesquise2.php">
<tr><td>Pesquisa por:
<select name="escolha" id="escolha"onchange="teste(this)">
<option value="escolha" selected>Escolha...</option>
<option value="todos" >Todos</option>
<option value="cod_cliente">Código</option>
<option value="nome">Nome</option>
<option value="endereco">Endereço</option>
<option value="bairro">Bairro</option>
<option value="uf">Uf</option>
<option value="cep">Cep</option>
<option value="telefone">Telefone</option>
<option value="celular">Celular</option>
<option value="dat_nasc">Data Nasc</option>
<option value="rg">Rg</option>
<option value="cpf">Cpf</option></td>
</select>
<tr><td><input name="campo" id="campo" size="60" value=""></td></tr>
<tr><td><input name="submit" type="submit" value="Enviar">
<input name="limpar" type="reset" value="Limpar">
<input name="voltar" type="button" value="Voltar" onclick="window.location='pesquisar2.php'"/></td></tr>
</table>
<hr width="600">
</body>
</html>
