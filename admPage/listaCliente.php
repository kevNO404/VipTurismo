<?php
include 'includes/header.php';
?>

	<!-- Main -->
		<section id="main" class="wrapper style1">
			<header class="major">
				<h2>Listar Clientes</h2>
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
                        <td>Telefone</td>
                        <td>E-mail</td>
                        <td>CPF</td>
                        <td>Observações</td>
                        <td>Editar</td>
                        <td>Deletar</td>
								</tr>
                <?php 
                include 'php/conexao.php';

                    $sqlconsulta = "SELECT * from cliente order by nomeCli asc";
                    $consulta = mysqli_query($con, $sqlconsulta);
		                while ($linha = mysqli_fetch_array($consulta)) {
                            $id = $linha["idCli"]; 
                            $nome = $linha["nomeCli"];
                            $telefone = $linha["telCli"];
                            $email = $linha["emailCli"];
                            $cpf = $linha["cpfCli"];
                            $obs = $linha["obs"];  
                ?> 
                                <tr>
                                <td><?=$id?></td>
                                <td><?=$nome?></td>
                                <td><?=$telefone?></td>
                                <td><?=$email?></td>
                                <td><?=$cpf?></td>
                                <td><?=$obs?></td>
                                <td><?php echo "<a href='editCliente.php?id=".$id."'>Editar</a>";?></td>
                                <td><?php echo "<a href='php/delCliente.php?id=".$id."'>Deletar</a>";?></td>
                                </tr>
                    <?php }
                    ?>
							</table>
						</section>
					</div>

<?php
include 'includes/footer.php';
?>