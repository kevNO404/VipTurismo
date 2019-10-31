<?php
include 'admPage/php/loginTo.php';

include 'includes/header.php';
?>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Fazer login</h2>
					<p>Efetuar login como administrador</p>
				</header>
				<div class="container">
						
					<!-- Content -->
						<section id="content">

							<!-- Form -->
								<section>
									<form method="post" action="login.php" name="login">
										<div class="row uniform">
											<div class="3u 12u(3)">
											<label for="">Login:</label>
												<input type="text" name="login" id="login" required="required" value="" placeholder="Seu login"/>
											</div>
											<div class="3u 12u(3)">
											<label for="">Senha:</label>
												<input type="password" required="required" name="senha" id="senha" value="" placeholder="******">
											</div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input name="logar" type="submit" value="Logar" /></li>
													<li><input type="reset" value="Apagar" class="alt"/></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
							</div>

<?php
include 'includes/footer.php';
?>