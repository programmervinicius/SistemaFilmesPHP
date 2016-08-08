<?php
//include ("verifica.php");
echo "<meta http-equiv= 'Content-Type' content='text/html; charset=utf-8 />"; 



include("conecta.php");
//include("jquery.php");

$cod_filme=$_POST['cod_filme'];
$filme=$_POST['filme'];
$descricao=$_POST['descricao'];
$cod_tipo=$_POST['cod_tipo'];
$tipo=$_POST['tipo'];
$cod_gen=$_POST['cod_gen'];
$genero=$_POST['genero'];
$cod_trad=$_POST['cod_trad'];
$traducao=$_POST['traducao'];
$ator=$_POST['ator'];
$diretor=$_POST['diretor'];
$produtora=$_POST['produtora'];
$ano=$_POST['ano'];
$duracao=$_POST['duracao'];
$imagem2=$_FILES['imagem2'];
$grupo=$_POST['grupo'];




mysql_connect ($hostname ,$username ,$password ) or die ('Falha na conexão');
mysql_select_db ($dbname);
//$sql = "select max(cod_filme) + 1 as proximo from filmes";

//$sql = "SELECT (Auto_increment)+1 as proximo FROM information_schema.tables WHERE table_name='filmes' AND table_schema = DATABASE()";
$sql = "select imagem from filmes where cod_filme='$cod_filme'";

$r=mysql_query($sql);
if ($r){
while ($l = mysql_fetch_array ($r)){
$imagem = $l['imagem'];


}
}





//teste com o nome da imagem
$nome_da_imagem = $imagem2["name"];
 // Se a foto estiver sido selecionada
        if (!empty($imagem2["name"])) {

                // Largura mÃ¡xima em pixels
                $largura = 150;
                // Altura mÃ¡xima em pixels
                $altura = 180;
                // Tamanho mÃ¡ximo do arquivo em bytes
                $tamanho = 1000;
/*
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
                }

                // Verifica se o tamanho da imagem Ã© maior que o tamanho permitido
/*                if($arquivo["size"] > $tamanho) {
 $error[4] = "A imagem deve ter no mÃ¡ximo ".$tamanho." bytes";
                }

                // Se nÃ£o houver nenhum erro
                if (count($error) == 0) {

                        // Pega extensÃ£o da imagem
                        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

                // Gera um nome Ãºnico para a imagem
                $nome_imagem = md5(uniqid(time())) . "." . $ext[1];*/
                  
                // Caminho de onde ficarÃ¡ a imagem
               
                $caminho_imagem = "fotos/" . "$imagem";

                        // Faz o upload da imagem para seu respectivo caminho
                        move_uploaded_file($imagem2["tmp_name"], $caminho_imagem);
                                                                                                                               
echo "<body bgcolor='cbe2e2'>";


}


//echo "$nome_imagem";

mysql_connect ($hostname ,$username ,$password ) or die ('Falha na conexão');
mysql_select_db ($dbname);
$sql =" update filmes set filme='$filme',descricao='$descricao',cod_tipo='$cod_tipo',cod_gen='$cod_gen',cod_trad='$cod_trad',ator='$ator',diretor='$diretor',produtora='$produtora',ano='$ano',duracao='$duracao',grupo='$grupo', imagem='$imagem'  where cod_filme='$cod_filme'";

$r=mysql_query($sql);
if (!$sql){
echo "Ocorreu algum erro, dados não alterados";
}
else
{
echo "<script>";
echo "alert ('Dados alterados com sucesso')";
echo "</script>";


echo "<script>";
echo "window.parent.location='http://localhost/Sisfilmes_Teste3/principal.php';";
echo "</script>";



}

?>
