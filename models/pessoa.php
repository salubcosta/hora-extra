<?php

class Pessoa extends model{

	public function validaLogin($usuario, $senha){

		$dados = array();

		$sql = 'SELECT id, nome, usuario, senha from pessoa where usuario = :usuario and senha = :senha';
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':usuario',addslashes($usuario)); //ADDSLASHES adiciona uma barra invertida antes de cada aspa simples e dupla
		$sql->bindValue(':senha', md5(addslashes($senha)));

		$sql->execute();

		if($sql->rowCount() > 0 ){
			$dados =  $sql->fetch();

			$_SESSION['id'] = $dados['id'];
			$_SESSION['nome'] = $dados['nome'];
			$_SESSION['usuario'] = $dados['nome'];
		}

		return $dados;
	}
}