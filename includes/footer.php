<!-- Footer -->
<footer class="footer">

			<div class="footer-right">

				<a href="https://www.facebook.com/servicosdeviagens/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/vipturismo.oficial/"><i class="fa fa-instagram"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="index.php">Início</a>
					·
					<a href="contate.php">Contate-nos</a>
					·
					<a href="politicasdeprivacidade.php">Políticas de privacidade</a>
					·
					<a href="login.php">Login</a>
				</p>

				<p>VipTurismo &copy;2019</p>
			</div>

		</footer>
			
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.maskInput.js"></script>
			<script src="js/jquery.dropotron.min.js"></script>
			<script src="js/jquery.scrollgress.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/jquery.slidertron.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/skel-layers.min.js"></script>
			<script src="js/init.js"></script>


			<script>
				
				function focoForm(formInst, elementInst){
					if (document.forms.length > 0){
					document.forms[formInst].elements[elementInst].focus();
					}
				}

		/*function mascaraCel(){

		var celular= document.getElementById('telefone').value;
			if(celular.length==1){
 			document.getElementById('telefone').value ='(' + celular;
  			}
			else if (celular.length==3){
 			document.getElementById('telefone').value = celular +')';
			}
			else if (celular.length==9){
 			document.getElementById('telefone').value = celular +'-';
			}
		}*/

		$(document).ready(function() {
			$("#telefone").mask("(99)99999-9999");
		});

</script>
	</body>
	</html>