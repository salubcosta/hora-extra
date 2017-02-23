<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="uft-8">
	<title>Projeto Hora-Extra</title>
	<link rel="stylesheet" href="./assets/css/template.css">
</head>
<body>

<div class="topo">
	<div class="menu">
		<ul>
			<a href="home"><li>Home</li></a>
			<a href="ponto"><li>Ponto</li></a>
			<a href="#"><li>Horas devedoras</li></a>
			<a href="#"><li>Verificar horas-extras</li></a>
			<a href="#"><li>Meus Dados</li></a>
			<a href="logout"><li>Sair</li></a>
		</ul>
	</div>
</div>
<div class="container">
<?php
	$this->carregarView($view, $dados);
?>
</div>
</body>
</html>