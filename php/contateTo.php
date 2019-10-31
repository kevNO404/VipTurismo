<?php

if(isset($_POST['enviar'])){

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    include 'conexao.php';

    $sqlMsg = "INSERT INTO contate (nome, telefone, email, assunto, mensagem, data) 
    VALUES ('".$nome."','".$telefone."','".$email."','".$assunto."','".$mensagem."', NOW())";

    if(mysqli_query($con,$sqlMsg)){
        echo"<script language='javascript' type='text/javascript'>alert('Enviado com Sucesso! Entraremos em contato.');window.location.href='contate.php';</script>";
    }else{
        echo"<script language='javascript' type='text/javascript'>alert('Não foi possível enviar, digite dados válidos.');window.location.href='contate.php';</script>";
    }

}

?>