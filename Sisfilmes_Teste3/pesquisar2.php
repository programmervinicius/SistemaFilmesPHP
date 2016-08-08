<?php

include("formata.php");
include("verifica.php");

?>
<html>
  <head>
   <title>pesquisa2.php</title>
  </head>
 <body>
<link rel="stylesheet" type="text/css" href="css1.php">


<script>

function teste(obj)
{
     if(obj.options[obj.selectedIndex].value == 'filmes')
        //document.forms[0].campo.disabled = true;
        window.parent.location='http://localhost/Sisfilmes_Teste3/pesquisar.php';
        else
        window.parent.location='http://localhost/Sisfilmes_Teste3/pesquisar3.php';
        // document.forms[0].campo.disabled = false;
}
</script>

<script>
function teste2(obj)
{
     if(obj.options[obj.selectedIndex].value == 'clientes')
        //document.forms[0].campo.disabled = true;
        window.parent.location='http://localhost/Sisfilmes_Teste3/pesquisar3.php';
        else 
        document.forms[0].campo.disabled = false;
}
</script>



 <br>
 <br>
 <br>
 <br>
 <hr width="600">
<center> <h1>Pesquisa</h1></center>
 <table align="center">
 <tr>
 <td>Pesquisa por:</td>
    <form name="pesquisa" method="POST" action="pesquisar2.php">
   <td> <select id="pesquisa" onchange="teste(this)" name="pesquisa">
    <option  selected value="Escolha..">Escolha...</option>
    <option value="clientes">Clientes</option>
   <option value="filmes">Filmes</option>
   </select></td>
  <tr><td><input name="voltar" type="button" value="Voltar" onclick="window.location='principal.php'"/></td></tr></td></tr>

 </tr>
<!--<tr><td> <input name="submit" type="submit" value="enviar"/></td></tr>-->

 </table>
 <hr width="600">











 </body>
</html>   
