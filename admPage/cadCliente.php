<?php
include 'php/cadClienteTo.php';
include 'includes/header.php';
?>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Cadastrar Cliente</h2>
				</header>
				<div class="container">
						
					<!-- Content -->
						<section id="content">

							<!-- Form -->
								<section>
									<form method="post" action="cadCliente.php" id="cadCliente" name="cadCliente">
										<div class="row uniform">
											<div class="6u 12u(3)">
											<label for="">Nome:</label>
												<input type="text" name="nome" id="nome" required="required" value="" placeholder="Digite o nome e sobrenome" />
											</div>
											<div class="6u 12u(3)">
											<label for="">Telefone:</label>
												<input type="text" name="telefone" required="required" id="telefone" value="" placeholder="(**)*****-****" onKeypress="mascaraCel();" 
												maxlength="14">
											</div>
											<div class="6u 12u(3)">
											<label for="">Email:</label>
												<input type="email" name="email" id="email" required="required" placeholder="Example@email.com" />
											</div>
											<div class="6u 12u(3)">
											<label for="">Cpf:</label>
												<input type="text" name="cpf" id="cpf" value="" placeholder="***.***.***-**" onKeypress="mascaraCpf()" maxlength="14" />
											</div>
											<div class="6u 12u(3)">
											<label for="">Observações:</label>
												<textarea type="text" name="obs" id="obs" value='' placeholder="Observações"></textarea>
											</div>
										</div>
												<ul class="actions">
													<li style="margin-top: 2%;"><input name="cadastrar" type="submit" value="Cadastrar"/></li>
													<li style="margin-top: 2%;"><input type="reset" value="Apagar" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
							</div>
<?php
include 'includes/footer.php';
?>