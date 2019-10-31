<?php
require 'php/verificaLogin.php';
?>
 
<!DOCTYPE HTML>

<html lang="pt-br">
	<head>
		<title> VipTurismo </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
			<link rel="stylesheet" href="../css/skel.css" />
			<link rel="stylesheet" href="../css/style.css" />
			<link rel="stylesheet" href="../css/style-xlarge.css" />

			<link rel="shortcut icon" href="../img/icone.ico" type="image/x-icon">
			<link rel="icon" href="../img/icone.ico" type="image/x-icon">

	</head>
	<body class="landing" onLoad="focoForm(0,0);">
		
		<!-- Header -->
		<header id="header" class="alt skel-layers-fixed">
			<h1><a href="../../index.php">VipTurismo</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="../../index.php">Home</a></li>
						<li>
							<a href="" class="icon fa-angle-down">Pacotes</a>
							<ul>
								<li><a href="listaPacote.php">Listar</a></li>
								<li><a href="cadPacote.php">Cadastrar</a></li>
							</ul>
						</li>
						<li>
							<a href="" class="icon fa-angle-down">Clientes</a>
							<ul>
								<li><a href="listaCliente.php">Listar</a></li>
								<li><a href="cadCliente.php">Cadastrar</a></li>
							</ul>
						</li>
						<li><a href="mensagens.php">Mensagens</a></li>
						<!--<li>
							<a href="" class="icon fa-angle-down">Anexados</a>
							<ul>
								<li><a href="listaCliente.php">Listar</a></li>
								<li><a href="listaPacote.php">Anexar</a></li>
							</ul>
						</li>-->
						<li><a href="php/logoff.php">Sair</a></li>
					</ul>
				</nav>
			</header>
