<script>
function aviso(mensagem,dias){
alert (mensagem + "Dias:" + dias);
}
</script>


<?php

function calcula_dt_entrega($dias){

$agora = new DateTime(date('Y-m-d'));
//$agora = new DateTime("2012-01-07");
$data_de_entrega = new DateTime(date('Y-m-d', strtotime("+$dias day")));

$interval = $agora->diff($data_de_entrega);

$dias_restante = "$interval->d";
if ($dias_restante == 0){
echo "<script>aviso('Hora de devolver o filme','$dias_restante');</script>";
}else{
echo "<script>aviso('Ainda esta no prazo', '$dias_restante');</script>";
}

}

calcula_dt_entrega('1');


?>
