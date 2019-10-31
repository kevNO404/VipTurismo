<?php
    include 'includes/header.php';
    include 'php/conexao.php';
    include 'php/editPacoteTo.php';
?>
        <!-- Main -->
            <section id="main" class="wrapper style1">
				<header class="major">
					<h2>Editar Pacotes</h2>
				</header>
				<div class="container">
						
					<!-- Content -->
						<section id="content">

    <?php
    $id = $_GET['id'];

    $query ="SELECT * FROM pacote WHERE idPac = $id";
    
    $result = mysqli_query($con,$query);
 
    if ($result->num_rows > 0) {
        while($linha = $result->fetch_assoc()) { ?>

							<!-- Form -->
								<section>
									<form method="post" action="php/editPacoteTo.php" name="editPacote">
										<div class="row uniform">
                                        <div class="1u 12u(3)">
                                        <label>Código:</label>
                                        <input type='text' name='id' readonly='readonly' value='<?=$linha["idPac"]?>'>
                                        </div>
											<div class="6u 12u(3)">
											<label for="">Nome:</label>
												<input type="text" name="nome" id="nome" required="required" value='<?=$linha["nomePac"]?>' placeholder="Digite o nome do pacote" />
											</div>
											<div class="6u 12u(3)">
											<label for="">Descriçõo:</label>
												<textarea type="text" name="descricao" id="descricao" placeholder="Digite a descrição"><?=$linha["descricaoPac"]?></textarea>
                                            </div>
                                            <div class="4u 12u(3)">
											<label for="">Categoria:</label>
												<select type="text" name="categoria" id="categoria" required="required">
													<option><?=$linha["categoriaPac"]?></option>
													<option>Promoção</option>
													<option>Nacional</option>
													<option>Internacional</option>
													<option>Cruzeiro</option>
													<option>Passagem</option>
													<option>Excursão</option>
													<option>Hospedagem</option>
												</select>
											</div>
											<div class="4u 12u(3)">
											<label for="">Valor:</label>
												<input type="text" name="valor" id="valor" value='<?=$linha["valor"]?>' placeholder="R$0.000,00" onKeyup="mascaraValor()" />
											</div>
											<div class="6u 12u(3)">
											<label for="">Imagem:</label>
												<input type="text" name="imagem" id="imagem" value='<?=$linha["imagem"]?>' placeholder="Link da imagem" />
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