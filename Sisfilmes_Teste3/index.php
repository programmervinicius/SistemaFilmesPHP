<?php
include('jquery.php');
include('formata.php');

?>
<html>
<head>
<title>login.php</title>

<!--<link rel='stylesheet' type='text/css' href='estilo.css.php'>-->

<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
</head>
<body>
<!--<body bgcolor="cbe2e2">-->
<script type="text/javascript">
function valida(){
if(document.relatorio.c.value==""){
alert ("Campo login obrigatório");
return false;
}
else
if(document.relatorio.d.value==""){
alert("Campo de senha obrigatório");
return false;
}
else
return true;
}

</script>
<div align="center">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr width="600">
<h1>Login</h1>
<br>
<table>
<tr>
<form name="relatorio" method="post" action="valida.php" onsubmit="return valida();return false;">
<td>Login:</td>
<td><input name="c" type="text" id="c" size="30"value=""></td></tr>
<br>
<tr>
<td>Senha:</td>
<td><input name="d" type="password" id="d" size="30" value=""></td></tr>
<br>
<br>
<tr>
<td></td>
<td><input name="submit" type="submit" value="Entrar" /></td></tr>
</table>
</form>
</div>
<hr width="600">
<div align="center">
<font size="3" color="gray">Powered by Rafael Almeida - Todos os direitos reservados - Sisfilmes-Versão 3.0</font>
</div>

</body>
</html>
