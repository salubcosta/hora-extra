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

		$ldapconfig['host']=""; //Ip do AD
		$ldapconfig['port']="389";
		$domain=""; //Nome do domínio

		$grupo='ou=INFORME,ou=INFORME,dc=INFORME,dc=INFORME,dc=INFORME,dc=INFORME'; //Informações do Domínio
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