<?php

class core{

	public function run(){
		$this->processarURL();
	}

	public function processarURL(){

		$params = array();
		if(isset($_GET['url'])){

			$url = filter_var(strtolower(rtrim($_GET['url'])), FILTER_SANITIZE_URL);

			$url = explode('/', $url);

			$controller = $this->verificarArray($url,0) ? $this->verificarArray($url,0).'Controller' : 'homeController';
			$action = $this->verificarArray($url,1) ? $this->verificarArray($url,1) : 'index';

			if($this->verificarArray($url,2)){
				unset($url[0]);
				unset($url[1]);
				$params = $url;
			}

		}else{
			$controller = 'homeController';
			$action = 'index';
		}
		
		if(!$this->verificarController($controller)){
			// Invocar 404.html
			exit;
		}
		$_controller = new $controller;

		if(!$this->verificarAction($_controller, $action)){
			// Invocar 404.html
			exit;
		}


		call_user_func_array(array($_controller, $action), $params);
	} // fim processarURL();

	public function verificarArray($array,$key){
		if(isset($array[$key])){
			return $array[$key];
		}
		return false;
	}

	public function verificarController($controller){
		return file_exists(DIRETORIO.'/controllers/'.$controller.'.php');
	}

	public function verificarAction($obj, $action){
		return method_exists($obj, $action);
	}
}