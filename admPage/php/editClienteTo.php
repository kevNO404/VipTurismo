<?php

    if (isset($_POST['atualizar'])){

    include('conexao.php');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $obs = $_POST['obs'];

    $up = "UPDATE cliente SET nomeCli='$nome', telCli='$telefone', emailCli='$email', cpfCli='$cpf', obs='$obs' WHERE idCli='$id'"; 

    $update = mysqli_query($con,$up);

    if($update)
    {
        echo"<script language='javascript' type='text/javascript'>alert('Atualizado com sucesso!');window.location.href='../listaCliente.php';</script>";
    }
    
}
?>