<?php
 
include('formata.php');
include('jquery.php');

?>

<html>
 <head><title>user.php</title></head>
  <body>
 <script type="text/javascript">
function valida(){
if(document.cadastro.login.value==""){
alert ("Campo login obrigatório");
return false;
}
else
if(document.cadastro.senha.value==""){
alert("Campo de senha obrigatório");
return false;
}
else
return true;
}

</script>

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
  <center><h1>Cadastra Usuário</h1></center>
 <table align="center">
  <form name="cadastro" method="post" action="cadastra_user.php" onsubmit="return valida();return false";>
  <tr><br><br></tr>
  <tr><td>Login:</td><td><input name="login" id="login" type="text" size="30" value=""></td></tr>
  <tr><td>Senha:</td><td><input name="senha" id="senha" type="password" size="30" value=""></td></tr>
  <tr></tr>
  <tr><td></td><td><input name="submit" type="submit" value="Cadastrar"/>
                   <input name="reset" type="reset" value="Limpar">
                   <input name="voltar" type="button" value="Voltar" onclick="window.location='principal.php'"></td></tr>

  </form>  



 </table>
 <hr width="600">
  </body>
</html> 
