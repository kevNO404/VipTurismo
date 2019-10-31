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
			<script src="../js/jquery.scrollgress.min.js"></script>
			<script src="../js/jquery.scrolly.min.js"></script>
			<script src="../js/jquery.slidertron.min.js"></script>
			<script src="../js/skel.min.js"></script>
			<script src="../js/skel-layers.min.js"></script>
			<script src="../js/init.js"></script>

	<!--mascaras-->
			<script>
		function mascaraCel(){

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
		}
			
		function mascaraCpf(){
   		var cpf = document.getElementById('cpf').value;
    	if(cpf.length==3){
     	document.getElementById('cpf').value = cpf +'.';
		}
    	else if(cpf.length==7){
     	document.getElementById('cpf').value = cpf +'.';
		}
    	else if (cpf.length==11){
     	document.getElementById('cpf').value = cpf +'-';
		}    
		}

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