<!-- Footer -->
<footer id="footer">
				<ul class="icons">
					
					<li><a href="https://www.facebook.com/servicosdeviagens/" class="icon fa-facebook" style="color: black !important; background: #0392b6;"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/vipturismo.oficial/" class="icon fa-instagram" style="color: black !important; background: #0392b6;"><span class="label">Instagram</span></a></li>
				</ul>
				<span class="copyright">
					&copy; 2019. Todos os direitos reservados.
				</span>
			</footer>
			
			<script src="../js/jquery.min.js"></script>
			<script src="../js/jquery.dropotron.min.js"></script>
			<script src="../js/jquery.maskInput.js"></script>
			<script src="../js/jquery.scrollgress.min.js"></script>
			<script src="../js/jquery.scrolly.min.js"></script>
			<script src="../js/jquery.slidertron.min.js"></script>
			<script src="../js/skel.min.js"></script>
			<script src="../js/skel-layers.min.js"></script>
			<script src="../js/init.js"></script>

	<!--mascaras-->
			<script>
		
		$(document).ready(function(){
			$("#telefone").mask("(99)99999-9999");
			$("#cpf").mask("999.999.999-99");
		});

		function mascaraValor() {
  		var elemento = document.getElementById('valor');
  		var valor = elemento.value;
  
  		valor = valor + '';
  		valor = parseInt(valor.replace(/[\D]+/g,''));
 		valor = valor + '';
  		valor = valor.replace(/([0-9]{2})$/g, ",$1");

  		if (valor.length > 6) {
  		  valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
 		 }
  		elemento.value = 'R$' + valor;
		}
</script>

	</body>
	</html>