<?php
include 'conexao.php';

if (isset($_POST['cadastrar'])){

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$valor = $_POST['valor'];
$imagem = $_POST['imagem'];

//$imagem = $_FILES['imagem']['name'];

/*if(isset($_FILES['imagem'])){
    //$extensao = explode('.', $_FILES['imagem']['name']);
    //$extensao = strtolower(end($extensao));
    $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "img/";
    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);*/

/*if($imagem != NULL) { 
    $tipoImagem = time().'.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $tipoImagem)) {
        $tamanhoImg = filesize($tipoImagem); 
        $mysqlImg = addslashes(fread(fopen($tipoImagem, "r"), $tamanhoImg)); */
    
 
$sqlCadPacote = "INSERT INTO pacote (nomePac, descricaoPac, categoriaPac, valor, imagem) VALUES ('".$nome."', '".$descricao."', '".$categoria."', '".$valor."', '".$imagem."')";

if(mysqli_query($con, $sqlCadPacote)){
    echo"<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com sucesso!');window.location.href='cadPacote.php';</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar, verifique os dados corretamente.');window.location.href='cadPacote.php';</script>";
}
}
//}

?>