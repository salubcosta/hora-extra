<?php

class Pessoa extends model{

	public function validaLogin($usuario, $senha){

		$dados = array();

		if($this->autenticarNoDomino($usuario, $senha)){
			$dados['usuario'] = $usuario;
			$dados['senha'] = md5($senha);

			$_SESSION['usuario'] = $dados['usuario'];
			$_SESSION['senha'] = $dados['senha'];
		}
		
		return $dados;
	}

	public function autenticarNoDomino($user, $pass){
		ini_set('error_reporting',E_ALL);
		ini_set('display_errors',1);

		$ldapconfig['host']="10.98.0.5";
		$ldapconfig['port']="389";
		$domain="EBSERHNET";

		$grupo='ou=hdt,ou=ebserh,dc=ebserhnet,dc=ebserh,dc=gov,dc=br';
		$filtro="(&(objectCategory=user)(memberOf=DN DO GRUPO))";

		$ds=ldap_connect($ldapconfig['host'], $ldapconfig['port']);
		ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
		ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);

		$bind=ldap_bind($ds, $user .'@'.$domain, $pass);

		if ($bind) {
			return true;
		}else{
			return false;
		}
	}
}