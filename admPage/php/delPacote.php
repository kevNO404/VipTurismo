<?php
include 'conexao.php';

$id = $_GET['id'];

$del = "DELETE from pacote where idPac='$id'";

$delete = mysqli_query($con,$del);

if($delete)
    {
        echo"<script language='javascript' type='text/javascript'>
        window.location.href='../listaPacote.php';
        </script>";
    }
?>