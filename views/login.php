<div class="formulario">
<h4>Acesso Restrito</h4>
	<form method="POST">
		<p>
			<input type="text" name="usuario" placeholder="Informe usuário" required="true" class="input">
		</p>
		<p>
			<input type="password" name="senha" placeholder="Informe senha" required="true" class="input">
		</p>
		<p>
			<button>Acessar</button>
		</p>
	</form>		
</div>


<?php

if(isset($usuario['id'])){
	header('Location: home');
}