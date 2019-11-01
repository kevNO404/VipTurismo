<?php
    include 'includes/header.php';
    include 'php/conexao.php';
    include 'php/editClienteTo.php';
?>
        <!-- Main -->
            <section id="main" class="wrapper style1">
				<header class="major">
					<h2>Editar Cliente</h2>
				</header>
				<div class="container">
						
					<!-- Content -->
						<section id="content">

    <?php
    $id = $_GET['id'];

    $query ="SELECT * FROM cliente WHERE idCli = $id";
    
    $result = mysqli_query($con,$query);
 
    if ($result->num_rows > 0) {
        while($linha = $result->fetch_assoc()) { ?>

							<!-- Form -->
								<section>
									<form method="post" action="php/editClienteTo.php" name="editCliente">
										<div class="row uniform">
                                        <div class="1u 12u(3)">
                                        <label>Código:</label>
                                        <input type='text' name='id' readonly='readonly' value='<?=$linha["idCli"]?>'>
                                        </div>
											<div class="6u 12u(3)">
											<label for="">Nome:</label>
												<input type="text" name="nome" id="nome" required="required" value='<?=$linha["nomeCli"]?>' placeholder="Digite o nome e sobrenome" />
											</div>
											<div class="6u 12u(3)">
											<label for="">Telefone:</label>
												<input type="text" name="telefone" id="telefone" value='<?=$linha["telCli"]?>' placeholder="(**)*****-****" onKeypress="mascaraCel();" 
												maxlength="14">
											</div>
											<div class="6u 12u(3)">
											<label for="">Email:</label>
												<input type="email" name="email" id="email" required="required" value='<?=$linha["emailCli"]?>' placeholder="Example@email.com" />
											</div>
											<div class="6u 12u(3)">
											<label for="">Cpf:</label>
												<input type="text" name="cpf" id="cpf" value='<?=$linha["cpfCli"]?>' placeholder="***.***.***-**" onKeypress="mascaraCpf()" maxlength="14" />
											</div>
											<div class="6u 12u(3)">
											<label for="">Observações:</label>
												<textarea type="text" name="obs" id="obs" value='<?=$linha["obs"]?>' placeholder="Observações"></textarea>
											</div>
										</div>
												<ul class="actions">
													<li><input name="atualizar" type="submit" value="Atualizar" /></li>
													<li><input type="reset" value="Resetar" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
							</div>
    
<?php }
} else {
    echo "<h2>Sem resultados para mostrar</h2>";
}

include 'includes/footer.php'
?>