<?php

class Controller{

    static public function ctrBase(){

		$table = $_SESSION["table"];
        $item = null;
	    $value= null;

		$resp = Model::MdlBase($table, $item, $value);

		return $resp;
	}

	static public function ctrLogin(){
	
			$table = 'users';
			$data = array("user_name" => $_POST["user_name"],
			"user_pass" => $_POST["user_pass"]);

			$resp = Model::MdlLogin($table, $data);
	
			return $resp;
	}

}