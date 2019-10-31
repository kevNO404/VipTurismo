<?php
include 'php/contateTo.php';
session_start();
include 'includes/header.php';
?>
		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Contate-nos</h2>
					<p>Quer tirar alguma dúvida, pedir uma contação, ou algum outro assunto?<br>
					Preencha os campos abaixo que entraremos em contato o mais breve possível.<br>
					Também atendemos em domicílio!</p>
				</header>
				<div class="container">
						
					<!-- Content -->
						<section id="content">

							<!-- Form -->
								<section>
									<form method="post" action="contate.php" name="contate" id="contate">
										<div class="row uniform">
											<div class="6u 12u(3)">
											<label for="">Nome:</label>
												<input type="text" name="nome" id="nome" required="required" value="" placeholder="Seu nome" />
											</div>
											<div class="6u 12u(3)">
											<label for="">Telefone:</label>
												<input type="text" name="telefone" id="telefone" value="" placeholder="(**)*****-****" />
											</div>
											<div class="6u 12u(3)">
											<label for="">Email:</label>
												<input type="email" name="email" id="email" required="required" value="" placeholder="Example@email.com" />
											</div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<div class="select-wrapper">
												<label for="">Assunto do contato:</label>
													<select required="required" name="assunto" id="assunto">
														<option value="">- Assunto -</option>
														<option>Cotação</option>
														<option>Dúvida</option>
														<option>Compra</option>
														<option>Reclamação</option>
														<option>Outro</option>
													</select>
												</div>
											</div>
										</div>
										
										<div class="row uniform">
											<div class="12u">
											<label for="">Mensagem:</label>
												<textarea required="required" name="mensagem" id="mensagem" placeholder="Digite sua mensagem..." rows="6"></textarea>
											</div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" name="enviar" value="Enviar" /></li>
													<li><input type="reset" value="Apagar" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
							</div>
<?php
include 'includes/footer.php';
?>