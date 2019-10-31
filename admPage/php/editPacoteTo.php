<?php

    if (isset($_POST['atualizar'])){

    include('conexao.php');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $valor = $_POST['valor'];
    $imagem = $_POST['imagem'];

    $up = "UPDATE pacote SET nomePac='$nome', descricaoPac='$descricao', categoriaPac='$categoria', valor='$valor', imagem='$imagem' WHERE idPac='$id'"; 

    $update = mysqli_query($con,$up);

    if($update)
    {
        echo"<script language='javascript' type='text/javascript'>alert('Atualizado com sucesso!');window.location.href='../listaPacote.php';</script>";
    }
    
}
?>