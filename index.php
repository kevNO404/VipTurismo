<?php 
session_start();
include 'includes/header.php';
?>
			
			<!-- Banner -->
			<section id="banner">
				<div class="inner">
						<h2>Olá viajantes</h2>
						<p>Estão afim de ter aquela viajem inesquecível?</p>
						<ul class="actions">
							<li><a href="#one" class="button big scrolly">Veja mais</a></li>
						</ul>
				</div>
			</section>
			
		<!-- One -->
		<section id="one" class="wrapper style1">
			<div class="container">
				<header class="major">
						<h2>Somos a VipTurismo</h2>
						<p>Uma agência de viagens, nova no mercado, porém com muita experiência.<br/>
							Temos o necessário para proporcioná-los uma viagem inesquecível, com aquele gostinho de quero mais!<br/>
							Veja e aproveite nossas promoções abaixo.</p>
							<h3 style="text-align: right; color: #eff306;  margin-top: -2%;">Se o ítem que você quer não está na lista, não se preocupe!<br>
							Entre em <a href="contate.php">contato</a> conosco para qualquer outra viagem de sua preferência.</h3>
						</header>
						
				</div>
				<div class="container">
						<div class="row">
						<?php          
           					$sqlconsulta = "SELECT * from pacote where categoriaPac='Promoção'";
           					$consulta = mysqli_query($con, $sqlconsulta);
								while ($linha = mysqli_fetch_array($consulta)) {
                					$nomePac = $linha["nomePac"];
                    				$descricaoPac = $linha["descricaoPac"];
                    				$categoriaPac = $linha["categoriaPac"];
                    				$valor = $linha["valor"];
									$imagem = $linha["imagem"];   
						?> 
							<div class="4u 6u(2) 12u$(3)">
							<article class="box post">
							<a href="contate.php" class="image fit"><img src="<?= $imagem ?>" alt="imgPacote" /></a>
								<h3> <?=  $nomePac ?> </h3>
								<p> <?=  $descricaoPac ?> </p>
								<h3> <?= $valor ?> </h3>
								<ul class="actions">
									<li><a href="contate.php" class="button">Solicitar</a></li>
								</ul>
							</article>
						</div>
					<?php }
						 ?>
					</div>
			</section>
						
	<?php 
	include 'includes/footer.php';
	?>