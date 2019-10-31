<?php
include 'conexao.php';

$id = $_GET['id'];

$del = "DELETE from cliente where idCli='$id'";

$delete = mysqli_query($con,$del);

if($delete)
    {
        echo"<script language='javascript' type='text/javascript'>
        window.location.href='../listaCliente.php';
        </script>";
    }
?>