<?php
include 'php/cadPacoteTo.php';

include 'includes/header.php';
?>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Cadastrar Pacote</h2>
				</header>
				<div class="container">
						
					<!-- Content -->
						<section id="content">

							<!-- Form -->
								<section>
									<form method="post" action="cadPacote.php" name="cadPacote" enctype="multipart/form-data">
										<div class="row uniform">
											<div class="6u 12u(3)">
											<label for="">Nome:</label>
												<input type="text" name="nome" id="nome" required="required" value="" placeholder="Digite o nome do pacote" />
											</div>
											<div class="6u 12u(3)">
											<label for="">Descrição:</label>
												<textarea name="descricao" id="descricao" required="required" value="" placeholder="Descriçao do pacote"></textarea>
											</div>
											<div class="6u 12u(3)">
											<label for="">Categoria:</label>
												<select type="text" name="categoria" id="categoria" required="required">
													<option value="">-Categoria-</option>
													<option>Promoção</option>
													<option>Nacional</option>
													<option>Internacional</option>
													<option>Cruzeiro</option>
													<option>Passagem</option>
													<option>Excursão</option>
													<option>Hospedagem</option>
												</select>
											</div>
											<div class="6u 12u(3)">
											<label for="">Valor:</label>
												<input type="text" name="valor" id="valor" placeholder="R$0.000,00" onKeyup="mascaraValor()" />
											</div>
											<div class="6u 12u(3)">
											<label for="">Imagem:</label>
											<input type="text" id="imagem" name="imagem" placeholder="Copie o link da imagem e cole aqui" />
										</div>
										<div class="6u 12u(3)">
												<ul class="actions">
													<li style="margin-top: 2%;"><input name="cadastrar" type="submit" value="Cadastrar" /></li>
													<li style="margin-top: 2%;"><input type="reset" value="Apagar" class="alt" /></li>
												</ul>
												</div>
											</div>
										</div>
									</form>
								</section>
							</div>

<?php
include 'includes/footer.php';
?>