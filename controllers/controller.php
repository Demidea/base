<?php

class Controller{

    static public function ctrBase(){

		$table = $_SESSION["table"];
        $item = null;
	    $value= null;

		$resp = Model::MdlBase($table, $item, $value);

		return $resp;

	}
}