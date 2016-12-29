<?php
require_once 'environment.php';

if(ENVIRONMENT == 'developmet'){
	define('HOST','localhost');
	define('DBNAME','dbhoraextra');
	define('DBUSER','root');
	define('DBPASS','root');
}else{
	define('HOST','');
	define('DBNAME','');
	define('DBUSER','');
	define('DBPASS','');
}

spl_autoload_register(function($file){
	if(file_exists(DIRETORIO.'/controllers/'.$file.'.php')){
		require_once DIRETORIO.'/controllers/'.$file.'.php';
	}elseif (file_exists(DIRETORIO.'/models/'.$file.'.php')) {
		require_once DIRETORIO.'/models/'.$file.'.php';
	}else
		require_once DIRETORIO.'/core/'.$file.'.php';
});