<?php
include 'includes/header.php';
?>

	<!-- Main -->
		<section id="main" class="wrapper style1">
			<header class="major">
				<h2>Listar Pacotes</h2>
			</header>
			<div class="container">
						
				<!-- Content -->
					<section id="content">

				<!-- Tabela -->
					<section>
						<table class="table table-responsive">
								<tr>
                                    <td>ID</td>
                                    <td>Nome</td>
                                    <td>Descrição</td>
                                    <td>Categoria</td>
                                    <td>Valor</td>
                                    <td>Imagem</td>
                                    <td>Editar</td>
                                    <td>Deletar</td>
								</tr>
                <?php 
                include 'php/conexao.php';

                    $sqlconsulta = "SELECT * from pacote ORDER BY categoriaPac,idPac desc";
                    $consulta = mysqli_query($con, $sqlconsulta);
		                while ($linha = mysqli_fetch_array($consulta)) {
                            $id = $linha["idPac"]; 
                            $nome = $linha["nomePac"];
                            $descricao = $linha["descricaoPac"];
                            $categoria = $linha["categoriaPac"];
                            $valor = $linha["valor"];  
                            $imagem = $linha["imagem"];
                ?> 
                                <tr>
                                <td><?=$id?></td>
                                <td><?=$nome?></td>
                                <td><?=$descricao?></td>
                                <td><?=$categoria?></td>
                                <td><?=$valor?></td>
                                <td><a href="<?=$imagem?>">Clique para visualizar</a></td>
                                <td><?php echo "<a href='editPacote.php?id=".$id."'>Editar</a>";?></td>
                                <td><?php echo "<a href='php/delPacote.php?id=".$id."'>Deletar</a>";?></td>
                                </tr>
                    <?php }
                    ?>
							</table>
						</section>
					</div>

<?php
include 'includes/footer.php';
?>