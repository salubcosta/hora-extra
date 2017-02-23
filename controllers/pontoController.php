<?php

class pontoController extends controller{

	public function index(){

		$dados = array();

		$this->carregarTemplate('ponto',$dados);
	}
}