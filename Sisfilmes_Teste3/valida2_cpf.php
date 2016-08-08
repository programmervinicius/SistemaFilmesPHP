<?
//creditos a Jefferson Estanislau da Silva pela formula do calculo
//FUNCAO

//echo "<body bgcolor='cbe2e2'>";

function cpf($cpf){
  	try{
    		$proibidos = array('11111111111','22222222222','33333333333',
                 	'44444444444','55555555555','66666666666','77777777777',
                 	'88888888888','99999999999','00000000000', '12345678909');
    		$cpf = ereg_replace('[^0-9]', '', $cpf);
    		if(in_array($cpf, $proibidos)){
       			throw new Exception('Erro: CPF Nulo !');
    		}
    		$a=0;
     		for($i=0; $i < 9; $i++){
       			$a += ($cpf[$i]*(10 - $i));
      		}
    		$b = ($a % 11);
    		$a = (($b > 1) ? (11 - $b) : 0);
     		if($a != $cpf[9]){
       			throw new Exception('Erro: CPF Invalido !');
      		}
    		$a=0;
     		for ($i=0; $i < 10; $i++){
       			$a += ($cpf[$i]*(11 - $i));
      		}
    		$b= ($a % 11);
    		$a = (($b > 1) ? (11 - $b) : 0);
     		if( $a != $cpf[10]){
       			throw new Exception('Erro: CPF Invalido !');
      		}
     	}
  	catch(Exception $e){
    		echo $e->getMessage();
   	}
   	if($cpf != '' && !isset($e)){
		echo "<script>";
		echo "alert ('CPF válido')";
		echo "</script>";
		//     echo 'OK ! CPF Valido !';
    	}
}
// EXEMPLO
//cpf($_POST['cpf']);

?>
<!--<form method="post"><input name="cpf" type="text" /> <input type="submit" value="verificar" />  </form>!-->
