<?php

class model{

	protected $db;

	public function __construct(){
		try{
			$this->db = new PDO("mysql:host=".HOST.';dbname='.DBNAME, DBUSER, DBPASS);
			$this->db->exec('SET CHARACTER SET uft8');
			$this->db->exec("SET NAMES 'utf8'");
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

		}catch(PDOException $e){
			echo 'Falha: ' . $e->getMessage();
		}
	}
}