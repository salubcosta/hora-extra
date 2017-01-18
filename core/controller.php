<?php

class controller{

	public function __construct(){
		if(!isset($_SESSION['usuario'])){
			$this->carregarTemplate('logout',[]);
		}
	}

	public function carregarTemplate($view, $dados){
		include DIRETORIO.'/views/template.php';
	}

	public function carregarView($view, $dados){
		extract($dados);
		include DIRETORIO.'/views/'.$view.'.php';
	}
}