<?php

if (isset($_POST['cadastrar'])){

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$obs = $_POST['obs'];

include 'conexao.php';

    $sqlCadCliente = "insert into cliente (nomeCli, telCli, emailCli, cpfCli, obs) values ('".$nome."','".$telefone."','".$email."','".$cpf."','".$obs."')";

    if(mysqli_query($con, $sqlCadCliente)){
        echo"<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com sucesso!');window.location.href='cadCliente.php';</script>";
    }else{
        echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar, verifique os dados corretamente.');window.location.href='cadCliente.php';</script>";
    }
}
?>