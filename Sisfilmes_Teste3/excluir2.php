<?php

include('verifica.php');
include ('conecta.php');
include('jquery.php');

$cod_cliente = $_GET['cod_cliente'];




mysql_connect( $hostname, $username, $password ) or die (' Erro ao tentar conectar ao banco de dados. ');
mysql_select_db( $dbname );
$sql ="select * from clientes where cod_cliente=$cod_cliente";

$r = mysql_query( $sql );
if ($r){
while( $l = mysql_fetch_array( $r ) )
{

$cod_cliente = $l['cod_cliente'];
$nome = $l['nome'];
$endereco = $l['endereco'];
$bairro = $l['bairro'];
$uf = $l['uf'];
$cep = $l['cep'];
$telefone = $l['telefone'];
$celular = $l['celular'];
$dat_nasc = $l['dat_nasc'];
$rg = $l['rg'];
$cpf = $l['cpf'];
$email = $l['email'];


}
}
?>



<html>
<head>
<title>excluir_cliente.php</title>
<!--<meta http-equiv='Content-Type'content='text/html; charset=utf-8'/>-->
</head>
<link rel="stylesheet" type="text/css" href="css1.php">

<body>
<!--<body bgcolor="cbe2e2">-->
<script type="text/javascript">
function valida(){
	if(document.relatorio.nome.value==""){
		alert("Campo nome é obrigatório");
		return false;
	}else if(document.relatorio.endereco.value==""){
		alert("Campo endereço é obrigatório");
		return false;
	}else if(document.relatorio.bairro.value==""){
		alert("campo bairro é obrigatório");
		return false;
	}else if(document.getElementById("uf").value == ""){
		alert("Campo uf é obrigatório");
		return false;
	}else if(document.relatorio.cep.value==""){
		alert("Campo cep é obrigatório");
		return false;
	}else if(document.relatorio.telefone.value==""){
		alert("Campo telefone é obrigatório");
		return false;
	}else if(document.relatorio.celular.value==""){
		alert("Campo celular é obrigatório");
		return false;
	}else if(document.relatorio.dat_nasc.value==""){
		alert("Campo data de nascimento é obrigatório");
		return false;
	}else if(document.relatorio.rg.value==""){
		alert("Campo rg é obrigatório")
		return false;
	}else if(document.relatorio.cpf.value==""){
		alert("Campo cpf é obrigatório")
		return false;
	}else if(document.relatorio.email.value==""){
		alert("Campo email é obrigatório")
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
<center><h1>Excluir Clientes</h1></center>
<table align="center">
<tr>
<form name="relatorio" method="post" action="exclui2.php" onsubmit= "return valida(); return false;">
<tr>
<td>Cod:</td>
<td><input name="cod_cliente" type="text" id="cod_cliente" size="5" value="<?php echo $cod_cliente ?>"></td>
</tr>
<td>Nome:</td>
<td><input name="nome" type="text" id="nome" size="45" value="<?php echo $nome ?>"></td>
</tr>
<tr>
<td>Endereço:</td>
<td><input name="endereco" type="text" id="endereco" size="60" value="<?php echo $endereco ?>"></td>
</tr>
<tr>
<td>Bairro:</td>
<td><input name="bairro" type="text" size="45" value="<?php echo $bairro ?>"></td>
<tr>
<td>Uf:</td>
<td><select name="uf" id="uf">
<option selected value="<?php echo $uf?>"><?php echo $uf?></option>
<option value="AC">AC</option>
<option value="AL">AL</option>
<option value="AM">AM</option>
<option value="AP">AP</option>
<option value="BA">BA</option>
<option value="CE">CE</option>
<option value="DF">DF</option>
<option value="ES">ES</option>
<option value="GO">GO</option>
<option value="MA">MA</option>
<option value="MS">MS</option>
<option value="MT">MT</option>
<option value="PA">PA</option>
<option value="PB">PB</option>
<option value="PE">PE</option>
<option value="PI">PI</option>
<option value="PR">PR</option>
<option value="RJ">RJ</option>
<option value="RN">RN</option>
<option value="RO">RO</option>
<option value="RR">RR</option>
<option value="RS">RS</option>
<option value="SC">SC</option>
<option value="SE">SE</option>
<option value="SP">SP</option>
<option value="TO">TO</option>
</select></td></tr>

<td>Cep:</td>
<td><input name="cep" type="text" id="cep" size="5" maxlength="9" value="<?php echo $cep ?>"></td>
</tr>
<tr>
<td>Telefone:</td>
<td><input name="telefone" type="text" id="telefone" size="10" maxlength="9" value="<?php echo $telefone ?>" ></td>
</tr>
<tr>
<td>Celular:</td>
<td><input name="celular" type="text" id="celular" size="10" maxlength="9" value="<?php echo $celular ?>"></td>
</tr>
<tr>
<td>Data Nasc:</td>
<td><input name="dat_nasc" type="text" id="dat_nasc" size="7" maxlength="10" class="dat_nasc" value="<?php echo $dat_nasc ?>"></td>
</tr>
<tr>
<td>Rg:</td>
<td><input name="rg" type="text" id="rg" size="12" value="<?php echo $rg ?>"></td>
</tr>
<tr>
<td>Cpf:</td>
<td><input name="cpf" type="text" id="cpf" size="12" value="<?php echo $cpf ?>"></td>
</tr>
<tr>
<tr>
<td>Email:</td>
<td><input name="email" type="text" id="email" size="60" value="<?php echo $email ?>"></td>
</tr>

<!--<tr>
<td>Imagem filme:</td>
<td><input name="imagem" type="file" id="imagem" size="15" ></td>
</tr>-->
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<td></td>
<td><input name="submit" type="submit" value="Excluir"/>
<input name="reset" type="reset" value="Limpar">
<input name="voltar" type="button" value="Voltar" onclick="window.location='buscar2.php'"></td>
<tr></tr>
<tr></tr>
</tr>
</form>
</table>
<hr width="600">
</body>
</html>
<html>
<head>
</head>
<body>
<div align="center">


  <script type="text/javascript" src="jquery.js"></script>

    <!-- Plugin para Mask --!>
    <script type="text/javascript" src="jquery.maskedinput-1.1.4.pack.js"/></script>

    <!-- Plugin para data --!>
    <link type="text/css" href="calendar/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
    <script type="text/javascript" src="calendar/jquery-1.4.2.js"></script>
    <script type="text/javascript" src="calendar/jquery.ui.core.js"></script>
    <script type="text/javascript" src="calendar/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="calendar/jquery.ui.datepicker.js"></script>
    <link type="text/css" href="calendar/demos.css" rel="stylesheet" />

<script type="text/javascript">

        /* Brazilian initialisation for the jQuery UI date picker plugin. */
/* Written by Leonildo Costa Silva (leocsilva@gmail.com). */
 $(function(){  
        $(".data").datepicker({  
        dateFormat: 'dd/mm/yy',  
        showOn: "button",
        buttonImage: "images/calendar.gif",
        buttonImageOnly: true,

        dayNames: [  
                'Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'  
        ],  
        dayNamesMin: [  
        'D','S','T','Q','Q','S','S','D'  
        ],  
        dayNamesShort: [  
        'Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'  
        ],  
        monthNames: [  
        'Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro',  
        'Outubro','Novembro','Dezembro'  
        ],  
        monthNamesShort: [  
        'Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set',  
        'Out','Nov','Dez'  
        ],  
        nextText: 'Próximo',  
        prevText: 'Anterior'  
 });  
 }); 
</script>

    <script type="text/javascript">
    $(document).ready(function(){
        $("#mask").mask("999.999.999.999");
        $("#dat_nasc").mask("99/99/9999");
	$("#telefone").mask("(99) 9999-9999");
        $("#celular").mask("(99) 9999-9999");
        $("#cep").mask("99999-999");


    });
    </script>

                                                                                                                            
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
</body>
</html>
