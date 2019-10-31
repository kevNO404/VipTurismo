<?php
include 'includes/header.php';
include 'php/conexao.php';
?>

	<!-- Main -->
		<section id="main" class="wrapper style1">
			<header class="major">
				<h2>Mensagem</h2>
			</header>
			<div class="container">
						

				<!-- Tabela 
					<section>
						<table>
								<th>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Telefone</td>
                        <td>E-mail</td>
                        <td>Assunto</td>
                        <td>Mensagem</td>
                        <td>Data</td>
								</th>-->
                <?php 

                  $id = $_GET['id'];

                  $query ="SELECT * FROM contate WHERE idCont = $id";
                    $consulta = mysqli_query($con, $query);
		                while ($linha = mysqli_fetch_array($consulta)) {
                            $id = $linha["idCont"]; 
                            $nome = $linha["nome"];
                            $telefone = $linha["telefone"];
                            $email = $linha["email"];
                            $assunto = $linha["assunto"];
                            $mensagem = $linha["mensagem"];
                ?> 

                     <div class="mensagem">
                        <h1><?=$nome?></h1>
                        <h2><?=$email?></h2>
                        <h2><?=$telefone?></h2>
                        <h3><?=$assunto?></h3>
                        <p><?=$mensagem?></p>
                      </div>
                    <?php }
                    ?>
							
						
               </div>
               </section

<?php
include 'includes/footer.php';
?>