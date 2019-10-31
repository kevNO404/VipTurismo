<?php
  session_start();
   
if(isset($_POST['logar'])){	

    include ("conexao.php");

	$login = $_POST ['login'];
  $senha = $_POST ['senha'];
  $senha = md5($senha);
  
  $query = "SELECT * from adm where login='$login' and senha='$senha' limit 1 ";
	
        $resultado = mysqli_query($con,$query);
 
        if (mysqli_num_rows($resultado)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');
          window.location.href='login.php';</script>";
          die();
        }else{
          while($linha = mysqli_fetch_array($resultado)){

            $_SESSION['logado'] = $linha['login'];
          }
          header("Location: admPage/mensagens.php");
        }
    }

?>