<?php
//include ("verifica.php");
echo "<meta http-equiv= 'Content-Type' content='text/html; charset=utf-8 />"; 



include("conecta.php");
include("jquery.php");

$grupo=$_POST['grupo'];
$filme=$_POST['filme'];
$descricao=$_POST['descricao'];
//$cod_tipo=$_POST['cod_tipo'];
//$cod_gen=$cod_gen['cod_gen'];
//$cod_trad=$cod_trad['cod_trad'];
$tip=$_POST['tip'];
$genero=$_POST['genero'];
$tipo=$_POST['tipo'];
$ator=$_POST['ator'];
$diretor=$_POST['diretor'];
$produtora=$_POST['produtora'];
$ano=$_POST['ano'];
$duracao=$_POST['duracao'];
$imagem=$_FILES['imagem'];


mysql_connect ($hostname ,$username ,$password ) or die ('Falha na conexão');
mysql_select_db ($dbname);
//$sql = "select max(cod_filme) + 1 as proximo from filmes";

$sql = "SELECT (Auto_increment)+1 as proximo FROM information_schema.tables WHERE table_name='filmes' AND table_schema = DATABASE()";


$r=mysql_query($sql);
if ($r){
while ($l = mysql_fetch_array ($r)){
$proximo = $l['proximo'];


}
}





//teste com o nome da imagem
$nome_da_imagem = $imagem["name"];
 // Se a foto estiver sido selecionada
        if (!empty($imagem["name"])) {

                // Largura mÃ¡xima em pixels
                $largura = 150;
                // Altura mÃ¡xima em pixels
                $altura = 180;
                // Tamanho mÃ¡ximo do arquivo em bytes
                $tamanho = 1000;/*

        // Verifica se o arquivo Ã© uma imagem
        if(!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $imagem["type"])){
           $error[1] = "Isso nÃ£o Ã© uma imagem.";
                }

                // Pega as dimensÃµes da imagem
                $dimensoes = getimagesize($imagem["tmp_name"]);

                // Verifica se a largura da imagem Ã© maior que a largura permitida
                if($dimensoes[0] > $largura) {
                        $error[2] = "A largura da imagem nÃ£o deve ultrapassar ".$largura." pixels";
                }

                // Verifica se a altura da imagem Ã© maior que a altura permitida
                if($dimensoes[1] > $altura) {
                        $error[3] = "Altura da imagem nÃ£o deve ultrapassar ".$altura." pixels";
                }*/

                // Verifica se o tamanho da imagem Ã© maior que o tamanho permitido
/*                if($arquivo["size"] > $tamanho) {
 $error[4] = "A imagem deve ter no mÃ¡ximo ".$tamanho." bytes";
                }

                // Se nÃ£o houver nenhum erro
                if (count($error) == 0) {

  */                      // Pega extensÃ£o da imagem
                    //    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

                // Gera um nome Ãºnico para a imagem
           //     $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
                  
                // Caminho de onde ficarÃ¡ a imagem
                $caminho_imagem = "fotos/" . "$proximo.jpg";

                        // Faz o upload da imagem para seu respectivo caminho
                        move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
                                                                                                                                 
echo "<body bgcolor='cbe2e2'>";


}




mysql_connect ($hostname ,$username ,$password ) or die ('Falha na conexão');
mysql_select_db ($dbname);
$sql = "INSERT INTO filmes (filme,descricao,cod_tipo,cod_gen,cod_trad,ator,diretor,produtora,ano,duracao,imagem,grupo)values ('$filme','$descricao','$tip','$genero','$tipo','$ator','$diretor','$produtora','$ano','$duracao','$proximo.jpg','$grupo')";

$r=mysql_query($sql);
if (!$sql){
echo "Ocorreu algum erro, dados não inseridos";
}
else
{
echo "<script>";
echo "alert ('Dados inseridos com sucesso')";	
echo "</script>";


echo "<script>";
echo "window.parent.location='http://localhost/Sisfilmes_Teste3/inserir.php';";
echo "</script>";



}

?>
