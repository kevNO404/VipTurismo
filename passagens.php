<?php 
session_start();
include 'includes/header.php';
?>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Passagens</h2>
					<p>Quer pegar algum avião ou qualquer outro transporte para o seu destino?<br> Conseguimos os melhores preços.</p>
				</header>
						
				<div class="container">
						<div class="row">
						<?php          
           					$sqlconsulta = "SELECT * from pacote where categoriaPac='Passagem'";
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