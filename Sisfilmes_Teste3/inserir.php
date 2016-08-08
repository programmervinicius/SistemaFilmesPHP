<?php
include('verifica.php');
include('jquery.php');
?>

<html>
<head>
<title>inserir.php</title>
<meta http-equiv='Content-Type'content='text/html; charset=utf-8'/>
</head>
<body>
<!--<body bgcolor="cbe2e2">-->
<script type="text/javascript">
function valida(){
if(document.relatorio.grupo.value==""){
alert("Campo grupo é obrigatório");
return false;
}else
if(document.relatorio.filme.value==""){
alert("Campo filme é obrigatório");
return false;
}else
if(document.relatorio.descricao.value==""){
alert("Campo descrição é obrigatório");
return false;
}else
if(document.getElementById("tip").value == ""){
alert("Campo tipo é obrigatório");
return false;
}else
if(document.getElementById("genero").value == ""){
alert("Campo gênero é obrigatório");
return false;
}else
if(document.getElementById("tipo").value ==""){
alert("Campo tradução é obrigatório");
return false;
}else
if(document.relatorio.ator.value==""){
alert("Campo ator é obrigatório");
return false;
}else
if(document.relatorio.diretor.value==""){
alert("Campo diretor é obrigatório");
return false;
}else
if(document.relatorio.produtora.value==""){
alert("Campo produtora é obrigatório");
return false;
}else
if(document.relatorio.duracao.value==""){
alert("Campo duração é obrigatório");
return false;
}else
if(document.relatorio.ano.value==""){
alert("Campo ano é obrigatório")
return false;
}else
return true;
}

</script>
<br>
<br>
<br>
<br>
<hr width="600">
<center><h1>Inserir</h1></center>
<table align="center">
<tr>
<form name="relatorio" method="post" action="insere.php" enctype="multipart/form-data"  onsubmit= "return valida(); return false;">
<td>Grupo:</td>
<td><input name="grupo" type="text" id="grupo" size="4" value=""></td>
</tr>
<td>Filme:</td>
<td><input name="filme" type="textarea" id="filme" size="40" value=""></td>
</tr>
<tr>
<td>Descrição:</td>
<td><textarea name="descricao" type="text" id="descricao" rows="3" cols="56" value=""></textarea></td>
</tr>
<tr>
<td>Tipo Filme:</td>
<td><select name="tip" id="tip">
<option selected value="">Tipo Filme...</option>
<option value="1">Normal</option>
<option value="2">Duplo</option>
<option value="3">Trilogia</option>
<option value="4">Quadrologia</option>
<option value="5">Quintologia</option>
<option value="6">Sextologia</option>
<option value="7">Septologia</option>
<option value="8">Octologia</option>
</select></td>
<tr>

<td>Gênero:</td>
<td><select name="genero" id="genero">
<option selected value="">Gênero...</option>
<option value="1">Ação</option>
<option value="2">Animação</option>
<option value="3">Aventura</option>
<option value="4">Biblíco</option>
<option value="5">Clássico</option>
<option value="6">Comédia</option>
<option value="7">Desenho</option>
<option value="8">Documentário</option>
<option value="9">Drama</option>
<option value="10">Èpico</option>
<option value="11">Evangélico</option>
<option value="12">Erótico</option>
<option value="13">Faroeste</option>
<option value="14">Ficção</option>
<option value="15">Guerra</option>
<option value="16">Infantil</option>
<option value="17">Musical</option>
<option value="18">Nacional</option>
<option value="19">Policial</option>
<option value="20">Romance</option>
<option value="21">Suspense</option>
<option value="22">Terror</option>
</select></td>
</tr>
<tr>
<td>Tipo:</td>
<td><select name="tipo" id="tipo">
<option selected value="">Tradução...</option>
<option value="1">Dublado</option>
<option value="2">Legendado</option>
</select></td>
</tr>
<tr>
<td>Atores:</td>
<td><input name="ator" type="text" id="ator" size="40" value=""></td>
</tr>
<tr>
<td>Diretor:</td>
<td><input name="diretor" type="text" id="diretor" size="40" value=""></td>
</tr>
<tr>
<td>Produtora:</td>
<td><input name="produtora" type="text" id="produtora" size="15" value=""></td>
</tr>
<tr>
<td>Ano:</td>
<td><input name="ano" type="text" id="ano" size="4" value=""></td>
</tr>
<tr>
<td>Duração:</td>
<td><input name="duracao" type="text" id="duracao" size="7"value=""></td>
</tr>
<tr>
<td>Imagem filme:</td>
<td><input name="imagem" type="file" id="imagem" size="15" ></td>
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<td></td>
<td><input name="submit" type="submit" value="Inserir"/>
<input name="reset" type="reset" value="Limpar">
<input name="voltar" type="button" value="Voltar" onclick="window.location='principal.php'"></td>
<tr></tr>
<tr></tr>
</tr>
</form>
</table>
<hr width="600">
</body>
</html>
