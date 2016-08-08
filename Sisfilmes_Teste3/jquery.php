<?php
include('formata.php');
?>
<html>
<head>
<title>jquery.php</title>
</head>

<link rel="stylesheet" type="text/css" href="css1.php">

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

    <script type="text/javascript">
    $(document).ready(function(){
        $("#mask").mask("999.999.999.999");
        $("#data").mask("99/99/9999");
        $("#telefone").mask("(99) 9999-9999");
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

</html> 
