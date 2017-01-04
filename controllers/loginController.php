<?php

class loginController extends controller{

	public function __construct(){
		
	}

	public function index(){

		$dados = array();

		if(isset($_POST['usuario']) && isset($_POST['senha'])){
			$pessoa = new Pessoa();	
			$dados['usuario'] = array_unique($pessoa->validaLogin($_POST['usuario'], $_POST['senha']));
		}
		
		$this->carregarTemplate('login',$dados);
	}
}