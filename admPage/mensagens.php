<?php
include 'includes/header.php';
?>

	<!-- Main -->
		<section id="main" class="wrapper style1">
			<header class="major">
				<h2>Mensagens</h2>
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
                        <td>Assunto</td>
                        <td>Mensagem</td>
                        <td>Data</td>
                        <td>Deletar</td>
								</tr>
                <?php 
                include 'php/conexao.php';

                    $sqlconsulta = "SELECT * from contate order by idCont desc ";
                    $consulta = mysqli_query($con, $sqlconsulta);
		                while ($linha = mysqli_fetch_array($consulta)) {
                            $id = $linha["idCont"]; 
                            $nome = $linha["nome"];
                            $telefone = $linha["telefone"];
                            $email = $linha["email"];
                            $assunto = $linha["assunto"];
                            $mensagem = $linha["mensagem"];
                            $data = $linha['data'];
                            $data = date('d/m/Y - H:i:s', strtotime($data));
                ?> 
                                <tr>
                                <td><?=$id?></td>
                                <td><?=$nome?></td>
                                <td><?=$telefone?></td>
                                <td><?=$email?></td>
                                <td><?=$assunto?></td>
                                <td><?php echo "<a href='mensagem.php?id=".$id."'>Visualizar</a>";?></td>
                                <td><?=$data?></td>
                                <td><?php echo "<a href='php/delMensagem.php?id=".$id."'>Deletar</a>";?></td>
                                </tr>
                    <?php }
                    ?>
							</table>
						</section>
					</div>

<?php
include 'includes/footer.php';
?>