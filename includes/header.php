<?php
include 'php/conexao.php';
?>

<!DOCTYPE HTML>

<html lang="pt-br">
	<head>
		<title> VipTurismo </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />

			<link rel="shortcut icon" href="../img/icone.ico" type="image/x-icon">
			<link rel="icon" href="../img/icone.ico" type="image/x-icon">
			
	</head>
	<body class="landing" onLoad="focoForm(0,0);">
		
		<!-- Header -->
		<header id="header" class="alt skel-layers-fixed">
			<h1><a href="index.php">VipTurismo</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>
							<a href="" class="icon fa-angle-down">Pacotes</a>
							<ul>
								<li><a href="nacional.php">Nacionais</a></li>
								<li><a href="internacional.php">Internacionais</a></li>
								<li><a href="cruzeiros.php">Cruzeiros</a></li>
								<li>
									<a href="">Individuais</a>
									<ul>
										<li><a href="hospedagens.php">Hospedagens</a></li>
										<li><a href="passagens.php">Passagens</a></li>
										<li><a href="excursoes.php">Excursões</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="contate.php">Fale conosco</a></li>
						<?php
						if(isset($_SESSION['logado'])){
    					echo "<li><a href='admPage/mensagens.php' class='btn btn-success btn-large'>Gerenciar</a></li>";
						}else{
    					echo "<li><a href='login.php' class='btn btn-success btn-large'>Login</a></li>";
						}
						?>
					</ul>
				</nav>
			</header>

			<?php